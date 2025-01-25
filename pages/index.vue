<template>
  <div class="bg-secondary text-white font-sans">
    <!-- Hero Section -->
    <section
      class="h-screen flex items-center justify-center bg-center bg-cover"
      style="background-image: url('/images/hero.jpg')"
    >
      <div class="text-center">
        <h2 class="text-5xl md:text-7xl font-bold mb-6">
          Architectures Épurées
        </h2>
        <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8">
          Découvrez nos réalisations modernes, minimalistes et inspirantes.
        </p>
        <NuxtLink
          to="/projects"
          class="inline-block bg-white text-black px-8 py-3 rounded-full text-lg font-medium hover:bg-gray-200 transition"
        >
          Voir nos projets
        </NuxtLink>
      </div>
    </section>

    <!-- Projets Section -->
    <section class="py-16 bg-primary">
      <div class="max-w-7xl mx-auto px-4">
        <h3 class="text-3xl md:text-4xl font-bold text-center mb-12">
          Nos Projets
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div
            v-for="project in projects"
            :key="project.id"
            class="relative group"
          >
            <img
              :src="project.image"
              :alt="project.name"
              class="w-full h-72 object-cover rounded-lg shadow-lg"
            />
            <div
              class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition"
            >
              <h4 class="text-lg font-bold">{{ project.name }}</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
const projects = [
  { id: 1, name: "Maison Contemporaine", image: "/images/project1.jpg" },
  { id: 2, name: "Villa Moderne", image: "/images/project1.jpg" },
  { id: 3, name: "Loft Industriel", image: "/images/project1.jpg" },
];
</script>
