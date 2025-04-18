import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
  // server: {
  //   host: "0.0.0.0",
  //   port: 5173,
  //   strictPort: true,
  //   hmr: {
  //     host: "localhost", // Or your host machine IP, e.g. '127.0.0.1'
  //   },
  // },
  plugins: [
    laravel({
      input: ["resources/css/app.css", "resources/js/app.js"],
      refresh: true,
    }),
    tailwindcss(),
  ],
  // resolve: {
  //   alias: {
  //     "@": "/resources/js",
  //   },
  // },
});
