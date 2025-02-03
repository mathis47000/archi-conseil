<template>
  <v-container fluid class="pa-0">
    <v-row no-gutters>
      <v-col cols="12" md="8" class="project-gallery">
        <v-carousel 
          cycle 
          height="600" 
          show-arrows-on-hover 
          class="elevation-4"
        >
          <v-carousel-item 
            v-for="(image, index) in project.images" 
            :key="index"
            :src="image"
            cover
          >
            <div class="image-overlay"></div>
          </v-carousel-item>
        </v-carousel>
      </v-col>
      
      <v-col cols="12" md="4" class="project-details pa-6">
        <div class="project-header mb-6">
          <h1 class="text-h4 font-weight-bold mb-2">{{ project.name }}</h1>
          <v-chip color="primary" variant="outlined">
            {{ project.theme }}
          </v-chip>
        </div>
        
        <v-divider class="my-4"></v-divider>
        
        <v-row class="project-meta">
          <v-col cols="6">
            <v-icon left>mdi-map-marker</v-icon>
            <span class="subtitle-2">{{ project.location }}</span>
          </v-col>
          <v-col cols="6">
            <v-icon left>mdi-calendar</v-icon>
            <span class="subtitle-2">{{ project.year }}</span>
          </v-col>
        </v-row>
        
        <v-card-text class="project-description pa-0 mt-4">
          <p class="body-1">{{ project.description }}</p>
        </v-card-text>
        
        <v-expansion-panels variant="accordion" class="mt-6">
          <v-expansion-panel>
            <v-expansion-panel-title>
              Project Specifications
            </v-expansion-panel-title>
            <v-expansion-panel-text>
              <v-list dense>
                <v-list-item v-for="(spec, key) in project.specifications" :key="key">
                  <v-list-item-title>{{ key }}: {{ spec }}</v-list-item-title>
                </v-list-item>
              </v-list>
            </v-expansion-panel-text>
          </v-expansion-panel>
          
          <v-expansion-panel>
            <v-expansion-panel-title>
              Architectural Concept
            </v-expansion-panel-title>
            <v-expansion-panel-text>
              <p>{{ project.concept }}</p>
            </v-expansion-panel-text>
          </v-expansion-panel>
        </v-expansion-panels>
        
        <v-card-actions class="mt-6">
          <v-btn 
            color="primary" 
            variant="elevated" 
            size="large"
            block
          >
            Contact Architect
          </v-btn>
        </v-card-actions>
      </v-col>
    </v-row>
  </v-container>
</template>

<script setup>
import { ref } from 'vue'
import { useRoute } from 'vue-router'

const projects = ref([
  {
    id: 1,
    name: "Villa Contemporaine sur la Colline",
    theme: "Architecture Contemporaine",
    location: "Provence, France",
    year: "2025",
    description: "Une résidence élégante qui s'intègre harmonieusement dans le paysage provençal, combinant des lignes épurées avec des matériaux naturels locaux.",
    concept: "L'architecture dialogue avec le terrain naturel, créant des espaces de vie ouverts qui capturent la lumière et les vues panoramiques.",
    images: [
      "/images/project1.jpg",
      "/images/hero.jpg", 
      "/images/project1.jpg"
    ],
    specifications: {
      "Surface Total": "450 m²",
      "Nombre de Chambres": 4,
      "Style": "Contemporain Minimaliste",
      "Matériaux Principaux": "Béton, Verre, Bois",
      "Orientation": "Sud-Ouest"
    }
  }
])

const route = useRoute()
const project = projects.value.find(p => p.id === 1)
</script>

<style scoped>
.image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    to bottom, 
    rgba(0,0,0,0.1), 
    rgba(0,0,0,0.4)
  );
}

.project-details {
  background-color: #f7f9fc;
}
</style>