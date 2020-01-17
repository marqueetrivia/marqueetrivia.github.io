(window.webpackJsonp=window.webpackJsonp||[]).push([[5],{229:function(t,e,n){},230:function(t,e){},235:function(t,e,n){"use strict";var a=n(229);n.n(a).a},236:function(t,e,n){"use strict";var a=n(230),s=n.n(a);e.default=s.a},240:function(t,e,n){"use strict";n.r(e);n(95),n(12),n(15);var a={name:"EventCard",props:{event:Object,isPresent:Boolean},methods:{eventDate:function(t){var e=new Date(t.node.acf.dateTime.replace(/\-/g,"/")),n="".concat((e.getHours()+11)%12+1,":").concat(e.getMinutes());return"".concat(["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"][e.getDay()],", ").concat(["January","February","March","April","May","June","July","August","September","October","November","December"][e.getMonth()]," ").concat(e.getDate()," at ").concat(n,"pm")}}},s=n(32),i={name:"EventsPage",data:function(){return{pastEvents:[],events:[]}},mounted:function(){var t=this,e=new Date;this.$page.allWordPressTriviaevent.edges.forEach((function(n){new Date(n.node.acf.dateTime.replace(/\-/g,"/"))<=e?t.pastEvents.push(n):t.events.push(n)}))},components:{EventCard:Object(s.a)(a,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"card"},[n("div",{staticClass:"event__inner grid"},[n("div",{staticClass:"grid-1of3 grid-push-2of3 grid-1of1--tablet-large"},[n("g-link",{attrs:{to:"/triviaevent/"+t.event.node.slug}},[n("div",{staticClass:"event__image background-image",style:{backgroundImage:"url(/triviaevents"+t.event.node.acf.photoAsset+")"}})])],1),n("div",{staticClass:"grid-2of3 grid-pull-1of3 grid-1of1--tablet-large"},[n("div",{staticClass:"event__details"},[n("g-link",{attrs:{to:"/triviaevent/"+t.event.node.slug}},[n("h3",{staticClass:"event__title"},[t._v(t._s(t.event.node.title))]),t.event.node.acf?n("p",{staticClass:"date"},[t._v("\n            "+t._s(t.eventDate(t.event))+"\n          ")]):t._e()]),n("a",{staticClass:"location",attrs:{href:"https://maps.google.com/?q="+t.event.node.acf.location.address,rel:"no-openner",target:"_blank"}},[n("font-awesome-icon",{attrs:{icon:["fas","map-marked-alt"]}}),t._v("\n          White Horse Tavern\n        ")],1),n("g-link",{attrs:{to:"/triviaevent/"+t.event.node.slug}},[n("div",{directives:[{name:"g-image",rawName:"v-g-image"}],staticClass:"event__description",domProps:{innerHTML:t._s(t.event.node.acf.description)}})]),t.isPresent?n("div",{staticClass:"event__ctas"},[n("a",{staticClass:"button",attrs:{href:t.event.node.acf.googleCalendarLink,target:"_blank",rel:"noopenner"}},[t._v("Add To Google Calendar")]),n("g-link",{staticClass:"button",attrs:{to:"/triviaevents/ical/"+t.event.node.acf.icalAsset,target:"_blank",rel:"noopenner"}},[t._v("Add To iCal")])],1):t._e()],1)])])])}),[],!1,null,null,null).exports},metaInfo:{title:"Events",meta:[{property:"og:title",content:"Marquee Trivia Events"},{property:"og:description",content:"Boston’s first trivia night for film lovers. Every month we dive into movie marginalia, Oscars history, box office stats, and more!"},{property:"og:url",content:"https://www.marqueetrivia.com/events"},{property:"og:image",content:"https://www.marqueetrivia.com/openingnight-hero.png"},{property:"twitter:title",content:"Marquee Trivia"},{property:"twitter:description",content:"Boston’s first trivia night for film lovers. Every month we dive into movie marginalia, Oscars history, box office stats, and more!"},{property:"twitter:card",content:"summary_large_image"},{property:"twitter:image",content:"https://www.marqueetrivia.com/openingnight-hero.png"}]}},o=(n(235),n(236)),r=Object(s.a)(i,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("Layout",[n("main",{staticClass:"events"},[n("header",{staticClass:"section section--yellow"},[n("div",{staticClass:"container"},[n("h1",[t._v("Trivia Nights")])])]),n("section",{staticClass:"section section--yellow"},[n("div",{staticClass:"container"},[t.events.length?n("h2",[t._v("Upcoming Events")]):n("p",{staticClass:"no-events"},[n("span",[t._v("No upcoming events announced... yet.")]),t._v("\n          Follow us @marqueetrivia and sign-up for the newsletter to\n          find out when we post a new night.\n        ")]),n("ul",{staticClass:"events__list"},t._l(t.events,(function(t){return n("li",{key:t.node.id,staticClass:"event"},[n("EventCard",{attrs:{event:t,isPresent:!0}})],1)})),0),n("h2",[t._v("Past Events")]),n("ul",{staticClass:"events__list"},t._l(t.pastEvents,(function(t){return n("li",{key:t.node.id,staticClass:"event"},[n("EventCard",{attrs:{event:t,isPresent:!1}})],1)})),0)])])])])}),[],!1,null,null,null);"function"==typeof o.default&&Object(o.default)(r);e.default=r.exports}}]);