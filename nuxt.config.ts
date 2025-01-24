import tailwindcss from "@tailwindcss/vite";

export default defineNuxtConfig({
  compatibilityDate: '2024-11-01',
  devtools: { enabled: true },
  build: {
    transpile: ['vuetify'],
  },
  css: ['vuetify/styles', '~/main.css'],
  vite: {
    plugins: [
      tailwindcss(),
    ],
    define: {
      'process.env.DEBUG': false,
    },
  },
})
