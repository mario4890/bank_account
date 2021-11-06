export default class Wallet {
    constructor() {
        // alert('test')
    }

    addAmount(walletID) {
        let addAmount = document.querySelector('.js-modalAddAmount');
        let modal = addAmount.closest('.modal');

        addAmount.querySelector('input[name=walletID]').value = walletID

        addAmount.classList.add('active')
        modal.classList.add('active')
    }

    subtractAmount(walletID) {
        let subtractAmount = document.querySelector('.js-modalSubtractAmount');
        let modal = subtractAmount.closest('.modal');

        subtractAmount.querySelector('input[name=walletID]').value = walletID

        subtractAmount.classList.add('active')
        modal.classList.add('active')
    }

    close(e) {
        e.preventDefault();
        let container = document.querySelector('.js-container.active');
        let modal = container.closest('.modal');
        container.querySelector('input[name=walletID]').value = '';

        container.classList.remove('active');
        modal.classList.remove('active');
    }
}
