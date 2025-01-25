import tailwindcss from "@tailwindcss/vite";

export default defineNuxtConfig({
  devtools: { enabled: true },

  build: {
    transpile: ['vuetify'],
  },

  css: ['vuetify/styles', '~/main.css','@mdi/font/css/materialdesignicons.min.css'],

  vite: {
    plugins: [
      tailwindcss(),
    ],
    define: {
      'process.env.DEBUG': false,
    },
  },

  compatibilityDate: '2025-01-25',
  modules: ['@nuxt/icon'],
})