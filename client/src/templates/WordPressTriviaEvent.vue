<template>
  <Layout>

  </Layout>
</template>

<page-query>
  query Post ($path: String!) {
    wordPressTriviaevent (path: $path) {
      title
    }
  }
</page-query>