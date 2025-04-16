<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Notifications\OtpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'email', 'otp', 'otp_expired_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'otp',
        'otp_expired_at',
        'otp_verified_at',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'otp_expired_at' => 'datetime',
            'otp_verified_at' => 'datetime',
            'otp' => 'hashed',
        ];
    }

    /**
    * Retrieve user by email and OTP.
    *
    * @param string $email
    * @param string $otp
    * @return int|null
    */
    protected static function getUserByEmailOtp(string $email, string $otp)
    {
        $user = self::where('email', $email)->first();

        if ($user && Hash::check($otp, $user->otp) && $user->otp_expired_at >= now()) {

            $user->verifyOtp();

            return $user;
        }

        return null;
    }

    /**
    * Clear OTP and update verification time.
    *
    * @return void
    */
    public function verifyOtp() :void
    {
        $this->update([
            'otp' => null,
            'otp_expired_at' => null,
            'otp_verified_at' => now()
        ]);
    }

    /**
    * Generate and send OTP to the user.
    *
    * @param string $email
    * @return int
    */
    public static function generateOtp(string $email)
    {
        $otp = random_int(100000, 999999);

        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'otp' => $otp,
                'otp_expired_at' => now()->addMinutes(5)
            ]
        );

        $user->notify(new OtpCreated($otp));

        return $otp;
    }

    /**
     * Get user's assets.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
