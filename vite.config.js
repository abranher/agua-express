import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

let inputs = [
  "css/app.css",
  "js/app.js",
  "js/inventory/product/create-product.js",
  "js/inventory/product/edit-product.js",
].map((item) => "resources/".concat(item));

export default defineConfig({
  plugins: [
    laravel({
      input: inputs,
      refresh: true,
    }),
    react(),
  ],
});
