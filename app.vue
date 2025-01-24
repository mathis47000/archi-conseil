<template>
  <div>
    <header class="bg-gray-800 text-white p-4">
      <nav>
        <ul class="flex space-x-4">
          <li><NuxtLink to="/">Accueil</NuxtLink></li>
          <li><NuxtLink to="/projects">Projets</NuxtLink></li>
          <li><NuxtLink to="/contact">Contact</NuxtLink></li>
        </ul>
      </nav>
    </header>
    <main>
      <NuxtPage />
    </main>
    <footer class="bg-gray-100 text-white text-center p-4">
      <p>&copy; 2025 - Mon Portfolio d'Architecte</p>
    </footer>
  </div>
</template>

<style>
@tailwind base;
@tailwind components;
@tailwind utilities;
@import 'vuetify/styles';
</style>
