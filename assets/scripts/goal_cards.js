'use strict';

export class GoalCards {
    constructor() {
        this.showMessageIfNoCard();
        this.printCardDataToModals();
        
    }

    showMessageIfNoCard() {
        const goalCardsContainer = document.getElementById('goal-cards-container');
        const goalCards = document.getElementsByClassName('goal-card');
        if (goalCards.length == 0) {
         const message = document.createElement('h4');
         message.textContent = 'カードはありません';
         goalCardsContainer.prepend(message);
        }
    }

    printCardDataToModals() {
        const goalCards = document.getElementsByClassName('goal-card');
        const editCardButton = document.getElementById('button-edit-card');
        const deleteCardButton = document.getElementById('button-delete-card');
        const editModal = document.getElementById('modal__edit-card');
        const deleteModal = document.getElementById('modal__delete-card-for-sure');
        let targetCardID;
        for (const card of goalCards) {
            card.querySelector('.card-action').addEventListener('click', (event) => {
              targetCardID = +event.target.closest('.goal-card').id;
              const cardTitle = card.querySelector('.card-title').textContent;
              const cardDescription = card.querySelector('.goal-card__description').textContent;
              editCardButton.classList.remove('hiden');
              deleteCardButton.classList.remove('hiden');
              editModal.querySelector('#edit-card-id').value = targetCardID;
              editModal.querySelector('#edit-card-id + label').classList.add('active');
              editModal.querySelector('#edit-card-title').value = cardTitle;
              editModal.querySelector('#edit-card-title + label').classList.add('active');
              editModal.querySelector('#edit-card-description').value = cardDescription;
              editModal.querySelector('#edit-card-description + label').classList.add('active');
              deleteModal.querySelector('#delete-card-id').value = targetCardID;
              deleteModal.querySelector('#delete-card-id + label').classList.add('active');
            });
        }
    }
}

