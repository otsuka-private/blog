'use strict';

import {
  activateFont
} from './font_activate.js';
import {
  initializeMaterialize
} from './materialize_initialize.js';
import {
  materializeCSSSelectFixed
} from './materializeCSSSelectFixed.js'
import {
  GoalCards
} from './goal_cards.js'

class App {
  constructor() {
    activateFont();
    initializeMaterialize();
    materializeCSSSelectFixed();
    if (location.pathname.includes('goal-card')) {
      new GoalCards();
    }

    // new GoalCards();
  }
}

new App();

// test below