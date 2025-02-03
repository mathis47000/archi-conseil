<template>
  <div class="bg-primary text-white">
    <!-- Filters Section -->
    <section class="pt-24 px-4 bg-gray-900">
      <div class="max-w-7xl mx-auto">
        <v-container>
          <v-row>
            <!-- Recherche textuelle -->
            <v-col cols="12" md="4">
              <v-text-field
                v-model="filters.text"
                label="Recherche par nom ou description"
                outlined
              />
            </v-col>

            <!-- Liste des thématiques -->
            <div class="px-6 py-4">
              <div class="flex flex-wrap gap-2">
                <v-chip
                  v-for="(theme, index) in themes"
                  :key="index"
                  :color="
                    selectedThemes.includes(theme)
                      ? 'secondary'
                      : 'grey lighten-3'
                  "
                  class="cursor-pointer text-sm"
                  @click="toggleTheme(theme)"
                >
                  {{ theme }}
                </v-chip>
              </div>
            </div>
          </v-row>
        </v-container>
      </div>
    </section>

    <!-- Projects Section -->
    <section class="py-12">
      <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Projets</h2>

        <v-container>
          <v-row>
            <v-col
              v-for="project in filteredProjects"
              :key="project.id"
              cols="12"
              md="4"
            >
              <v-card class="rounded-lg">
                <v-img
                  :src="project.image"
                  :alt="project.name"
                  height="200"
                ></v-img>
                <v-card-title>{{ project.name }}</v-card-title>
                <v-card-subtitle>{{ project.theme }}</v-card-subtitle>
                <v-card-actions>
                  <NuxtLink
                    :to="`/project/${project.id}`"
                    class="text-primary hover:underline"
                  >
                    Voir plus
                  </NuxtLink>
                </v-card-actions>
              </v-card>
            </v-col>
          </v-row>
        </v-container>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, computed } from "vue";

const projects = ref([
  {
    id: 1,
    name: "Maison Moderne",
    theme: "Moderne",
    date: "2023-01-15",
    description: "Un projet de maison contemporaine et élégante.",
    image: "/images/project1.jpg",
  },
  {
    id: 2,
    name: "Villa Contemporaine",
    theme: "Contemporain",
    date: "2023-06-12",
    description: "Une villa au design épuré et moderne.",
    image: "/images/project1.jpg",
  },
  {
    id: 3,
    name: "Loft Industriel",
    theme: "Industriel",
    date: "2022-09-01",
    description: "Un loft avec un design brut et industriel.",
    image: "/images/project1.jpg",
  },
  {
    id: 3,
    name: "Loft Industriel",
    theme: "Industriel",
    date: "2022-09-01",
    description: "Un loft avec un design brut et industriel.",
    image: "/images/project1.jpg",
  },
  {
    id: 3,
    name: "Loft Industriel",
    theme: "Industriel",
    date: "2022-09-01",
    description: "Un loft avec un design brut et industriel.",
    image: "/images/project1.jpg",
  },
  {
    id: 3,
    name: "Loft Industriel",
    theme: "Industriel",
    date: "2022-09-01",
    description: "Un loft avec un design brut et industriel.",
    image: "/images/project1.jpg",
  },
  {
    id: 3,
    name: "Loft Industriel",
    theme: "Industriel",
    date: "2022-09-01",
    description: "Un loft avec un design brut et industriel.",
    image: "/images/project1.jpg",
  },
  {
    id: 3,
    name: "Loft Industriel",
    theme: "Industriel",
    date: "2022-09-01",
    description: "Un loft avec un design brut et industriel.",
    image: "/images/project1.jpg",
  },
  {
    id: 3,
    name: "Loft Industriel",
    theme: "Industriel",
    date: "2022-09-01",
    description: "Un loft avec un design brut et industriel.",
    image: "/images/project1.jpg",
  },
]);

const filters = ref({
  text: "",
  themes: [],
  dateRange: null,
});
const themes = [
  "Moderne",
  "Contemporain",
  "Industriel",
  "Traditionnel",
  "Minimaliste",
  "Écologique",
];

const selectedThemes = ref([]);

const toggleTheme = (theme) => {
  if (selectedThemes.value.includes(theme)) {
    selectedThemes.value = selectedThemes.value.filter((t) => t !== theme);
  } else {
    selectedThemes.value.push(theme);
  }
};
const filteredProjects = computed(() => {
  return projects.value.filter((project) => {
    const matchesText =
      filters.value.text === "" ||
      project.name.toLowerCase().includes(filters.value.text.toLowerCase()) ||
      project.description
        .toLowerCase()
        .includes(filters.value.text.toLowerCase());

    const matchesTheme =
      selectedThemes.value.length === 0 ||
      selectedThemes.value.includes(project.theme);

    return matchesText && matchesTheme;
  });
});

</script>

<style scoped>
.v-chip {
  transition: background-color 0.2s, transform 0.2s;
}
.v-chip:hover {
  transform: scale(1.05);
}
</style>
