<template>
  <Layout>
    <main class="home">
      <header class="hero">
        <div class="overlay">
          <div class="container">
            <div class="overlay__content">
              <h1>Boston's First Trivia Night For Film Lovers</h1>
              <p>took us long enough...</p>
            </div>
          </div>
        </div>
        <g-image src="~/assets/home/PlaceholderHero.jpg"
        class="hero__img"/>
      </header>
    </main>
  </Layout>
</template>

<style lang="scss">
  @import "@/styles/pages/home.scss";
</style>

<script>
export default {
  metaInfo: {
    title: 'Home'
  }
}
</script>
