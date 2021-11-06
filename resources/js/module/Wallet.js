export default class Wallet {
    constructor() {
        // alert('test')
    }

    addWallet(walletID) {
        let wallet = document.querySelector('.js-modalAddWallet');
        let modal = wallet.closest('.modal');

        wallet.classList.add('active')
        modal.classList.add('active')
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
        if(container.querySelector('input[name=walletID]')) {
            container.querySelector('input[name=walletID]').value = '';
        }

        container.classList.remove('active');
        modal.classList.remove('active');
    }
}
