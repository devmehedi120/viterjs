/* eslint-disable no-undef */
import vue from "@vitejs/plugin-vue";
import { defineConfig } from "vite";
import { resolve } from "path";

export default defineConfig({
  plugins: [
    vue({
      include: "**/*.vue",
    }),
  ],
  root: "",
  build: {
    outDir: resolve(__dirname, "./dist"),
    emptyOutDir: true,
    manifest: false,
    rollupOptions: {
      input: {
        main: resolve(__dirname, "src/main.js"),
      },
    },
    sourcemap: false,
    minify: true,
    write: true
  },
  server: {
    cors: true,
    strictPort: true,
    port: 3000,
    https: false,
    hmr: {
      host: "localhost"
    },
  },

  resolve: {
    alias: {},
  },
});
