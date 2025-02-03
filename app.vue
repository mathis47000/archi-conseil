<template>
  <v-app>
    <v-app-bar app>
      <v-toolbar-title class="font-bold">
        <NuxtLink to="/">Archi Conseil </NuxtLink></v-toolbar-title
      >
      <v-spacer></v-spacer>

      <v-toolbar-items>
        <v-btn text v-for="(item, i) in links" :key="i" :to="item.link">
          {{ item.title }}
        </v-btn>
      </v-toolbar-items>
    </v-app-bar>
    <v-main>
      <NuxtPage />
    </v-main>
  </v-app>
</template>

<script setup>
const links = [
  { title: "Projets", link: "/projects" },
  { title: "Contact", link: "/contact" },
];
</script>
