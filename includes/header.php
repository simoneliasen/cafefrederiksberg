<style>
.slider {
  height: 130px;
  width: 680px;
  overflow: visible;
  position: relative;
}

.mask {
  overflow: hidden;
  height: 130px;
}

.slider ul {
  margin: 0;
  padding: 0;
  position: relative;
}

.slider li {
  width: 680px;
  height: 320px;
  position: absolute;
  top: -325px;
  list-style: none;
}

.slider li.anim1 {
  animation: cycle 15s linear infinite;
}

.slider li.anim2 {
  animation: cycle2 15s linear infinite;
}

.slider li.anim3 {
  animation: cycle3 15s linear infinite;
}

.slider li.anim4 {
  animation: cycle4 15s linear infinite;
}

.slider li.anim5 {
  animation: cycle5 15s linear infinite;
}

.slider:hover li {
  animation-play-state: paused;
}

@keyframes cycle {
  0% {
    top: 0px;
  }
  4% {
    top: 0px;
  }
  16% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  20% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  21% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  50% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  92% {
    top: -325px;
    opacity: 0;
    z-index: 0;
  }
  96% {
    top: -325px;
    opacity: 0;
  }
  100% {
    top: 0px;
    opacity: 1;
  }
}

@keyframes cycle2 {
  0% {
    top: -325px;
    opacity: 0;
  }
  16% {
    top: -325px;
    opacity: 0;
  }
  20% {
    top: 0px;
    opacity: 1;
  }
  24% {
    top: 0px;
    opacity: 1;
  }
  36% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  40% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  41% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@keyframes cycle3 {
  0% {
    top: -325px;
    opacity: 0;
  }
  36% {
    top: -325px;
    opacity: 0;
  }
  40% {
    top: 0px;
    opacity: 1;
  }
  44% {
    top: 0px;
    opacity: 1;
  }
  56% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  60% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  61% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@keyframes cycle4 {
  0% {
    top: -325px;
    opacity: 0;
  }
  56% {
    top: -325px;
    opacity: 0;
  }
  60% {
    top: 0px;
    opacity: 1;
  }
  64% {
    top: 0px;
    opacity: 1;
  }
  76% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  80% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  81% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@keyframes cycle5 {
  0% {
    top: -325px;
    opacity: 0;
  }
  76% {
    top: -325px;
    opacity: 0;
  }
  80% {
    top: 0px;
    opacity: 1;
  }
  84% {
    top: 0px;
    opacity: 1;
  }
  96% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  100% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
}

</style>

<base href="http://localhost/cafefrederiksberg/index.php">

<div class="header_bg_img">
  <video autoplay muted loop src="video/header_bg_video.mp4" height="75vh"></video>
  <div class="header_text">
    <h1>Aalborgs Hyggeligste</h1>
  <div class="slider">
    <div class="mask">
      <ul>
        <li class="anim1">
          <div class="quote"><h1>Live-Spillested</h1></div>
        </li>
        <li class="anim2">
          <div class="quote"><h1>Restaurant</h1></div>
        </li>
        <li class="anim3">
          <div class="quote"><h1>Værtshus</h1></div>
        </li>
        <li class="anim4">
          <div class="quote"><h1>Festlokaler</h1></div>
        </li>
        <li class="anim5">
          <div class="quote"><h1>din mor</h1></div>
        </li>
      </ul>
    </div>
  </div>
  </div>
</div>
