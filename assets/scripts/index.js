'use strict';

import {
  activateFont
} from './font_activate.js';
import {
  initializeMaterialize
} from './materialize_initialize.js'

class App {
  constructor() {
    activateFont();
    initializeMaterialize();
  }
}

new App();

// test below
