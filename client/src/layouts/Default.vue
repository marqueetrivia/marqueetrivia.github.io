<template>
  <div class="layout">
    <header class="header" id="site-header">
      <div class="container">
        <div class="logo-container">
          <g-link to="/" class="logo">{{ $static.metadata.siteName }}</g-link>
        </div>
      </div>
    </header>
    <article class="lightboard grid">
      <slot/>
      <div class="grid-1of1 grid lightboard__row">
        <div class="grid-1of3">
          <div class="lightboard__group">
            <g-link class="lightboard__link" to="/about/">About</g-link>
          </div>
        </div>
        <div class="grid-1of3">
          <div class="lightboard__group">
            <g-link class="lightboard__link" to="/events/">Events</g-link>
          </div>
        </div>
        <div class="grid-1of3">
          <div class="lightboard__group">
            <g-link class="lightboard__link" to="/contact/">Contact</g-link>
          </div>
        </div>
      </div>
      <div class="grid-1of1 grid lightboard__row"/>
    </article>
    <footer id="site-footer">
      <div class="container">
        <div class="social-links-container">
          <nav class="social-links">
            <ul class="social-links__menu">
              <li class="social-links__cta">
                Follow Us:
              </li>
              <li class="social-links__link">
                <a href="https://www.facebook.com/marqueetrivia/" rel="noopenner" target="_blank">Facebook</a>
              </li>
              <li class="social-links__link">
                <a href="https://twitter.com/MarqueeTrivia" rel="noopenner" target="_blank">Twitter</a>
              </li>
              <li class="social-links__link">
                <a href="https://www.instagram.com/marqueetrivia" rel="noopenner" target="_blank">Instagram</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="copyright">
          &copy;{{new Date().getFullYear()}} Marquee Trivia
        </div>
      </div>
    </footer>
  </div>
</template>

<static-query>
query {
  metadata {
    siteName
  }
}
</static-query>