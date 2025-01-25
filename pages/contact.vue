<template>
  <v-container class="py-12 text-center">
    <v-row justify="center">
      <v-col cols="12" md="8">
        <h1 class="text-3xl font-bold mb-6">Contactez-nous</h1>
        <p class="mb-4 text-lg">
          Vous pouvez nous contacter directement via nos réseaux sociaux ou par
          email.
        </p>
        <div class="flex justify-center items-center space-x-6 mb-6">
          <!-- Liens vers les réseaux sociaux -->
          <v-btn
            icon
            href="https://www.facebook.com"
            target="_blank"
            rel="noopener noreferrer"
          >
            <v-icon>mdi-facebook</v-icon>
          </v-btn>
          <v-btn
            icon
            href="https://www.instagram.com"
            target="_blank"
            rel="noopener noreferrer"
          >
            <v-icon>mdi-instagram</v-icon>
          </v-btn>
          <v-btn
            icon
            href="https://www.twitter.com"
            target="_blank"
            rel="noopener noreferrer"
          >
            <v-icon>mdi-twitter</v-icon>
          </v-btn>
        </div>
        <!-- Coordonnées -->
        <p class="text-lg mb-4">
          <strong>Email :</strong> contact@archi-conseil.com
        </p>
        <p class="text-lg"><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
      </v-col>
    </v-row>
  </v-container>
</template>

<script setup></script>

<style scoped>
.v-btn {
  transition: transform 0.3s ease-in-out;
}

.v-btn:hover {
  transform: scale(1.1);
}
</style>
