<template>
  <div class="bg-secondary text-white font-sans">
    <v-carousel 
    height="100vh" 
    :show-arrows="false"
    hide-delimiters
    cycle 
    interval="5000" 
    class="hero-carousel"
  >
    <v-carousel-item 
      v-for="(slide, index) in heroSlides" 
      :key="index"
      :src="slide.image"
      cover
    >
      <v-container class="fill-height">
        <v-row 
          justify="center" 
          class="text-center"
        >
          <v-col cols="12">
            <h2 
              class="text-h2 font-weight-bold mb-4 text-white" 
              data-aos="fade-up"
            >
              {{ slide.title }}
            </h2>
            <p 
              class="text-h5 mb-6 text-white max-w-xl mx-auto" 
              data-aos="fade-up" 
              data-aos-delay="200"
            >
              {{ slide.subtitle }}
            </p>
            <v-btn 
              to="/projects"
              color="white"
              size="large"
              variant="elevated"
              data-aos="fade-up" 
              data-aos-delay="400"
            >
              Voir nos projets
            </v-btn>
          </v-col>
        </v-row>
        <div class="carousel-overlay"></div>
      </v-container>
    </v-carousel-item>
  </v-carousel>

    <!-- Projets Section -->
    <section class="py-16 bg-primary">
      <div class="max-w-7xl mx-auto px-4">
        <h3 class="text-3xl md:text-4xl font-bold text-center mb-12">
          Actualités
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

const heroSlides = [
  {
    title: "Architecture Moderne",
    subtitle: "Découvrez nos projets d'architecture contemporaine.",
    image: "/images/hero.jpg",
  },
  {
    title: "Design d'Intérieur",
    subtitle: "Des intérieurs modernes et élégants pour votre maison.",
    image: "/images/project1.jpg",
  },
  {
    title: "Architecture Industrielle",
    subtitle: "Des bâtiments industriels modernes et fonctionnels.",
    image: "/images/hero.jpg",
  },
];
</script>

<style scoped>
.hero-carousel .v-carousel__controls {
  display: none !important;
}
</style>