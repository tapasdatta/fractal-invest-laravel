Project Idea: Decentralized Micro-Investment Platform
A REST API-based platform where users pool small amounts of money to collectively invest in fractional ownership of high-value assets (e.g., real estate, art, or rare collectibles). Users propose assets, vote on investments, and track returns, with the system handling complex financial workflows and real-time updates.


# Fract Invest App Recommendation

## Project installation and setup

> #### STEP 01: Install composer on docker:

```bash
git@github.com
```

> #### STEP 02: Project clone from github:

```bash
cd fractal-invest-laravel
```

> #### STEP 03: Enter project directory:

```bash
copy .env.example -> .env
```

> #### STEP 04: Build app

```bash
docker-compose build app
```

> #### STEP 05: Run project:

```bash
docker-compose up -d
```

> #### STEP 06: Stop & start project:

```bash
docker-compose down
```

```bash
docker-compose up -d
```

> #### STEP 07: Composer Install:

```bash
docker-compose exec app composer install
```

> #### Step 08: Generate app key

```bash
docker-compose exec app php artisan key:generate
```

> #### STEP 09: Migrate project:

```bash
docker-compose exec app php artisan migrate:fresh --seed
```

> #### STEP 10: Docker node install:

```bash
docker-compose exec app yarn install
```

> #### STEP 11: Docker node run:

```bash
docker-compose exec app yarn dev
```

> #### STEP 12: Docker node watch:

```bash
docker-compose exec app yarn watch
```

> #### Running cron job command

```bash
docker-compose exec app php artisan queue:work
docker-compose exec app php artisan schedule:work
```

Done !
