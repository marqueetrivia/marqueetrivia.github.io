<template>
  <div class="layout">
    <header class="header" id="site-header">
      <div class="container grid">
        <div class="logo-container grid-1of1">
          <g-link to="/" class="logo">{{ $static.metadata.siteName }}</g-link>
        </div>
        <nav class="nav grid-2of3">
          <ul class="menu">
            <li class="menu__item">
              <g-link to="/about" class="menu__link">About</g-link>
            </li>
            <li class="menu__item">
              <g-link to="/events" class="menu__link">Events</g-link>
            </li>
            <li class="menu__item">
              <g-link to="/contact" class="menu__link">Contact</g-link>
            </li>
          </ul>
        </nav>
        <div class="next-event grid-1of3">
          <g-link class="next-event__link">
            Coming Soon:
            <span class="next-event__title">Preview Night</span>
            <span class="next-event__date">11/9 @ 5pm</span>
          </g-link>
        </div>
      </div>
    </header>
    <article class="content">
      <slot/>
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