<div class="modal">
    <div class="modal__container js-container js-modalAddAmount">
        <form action="{{ route('addAmount') }}" method="POST">
            @csrf
            <input type="hidden" name="walletID" value="">
            <div class="modal__header">
                Add amount
            </div>
            <div class="modal__content">
                    <div class="table">
                        <div class="table__container">
                            <div class="table__row">
                                <div class="table__col">
                                    Amount:
                                </div>
                                <div class="table__col">
                                    <input type="text" value="" name="amount" pattern="[0-9]+([\.][0-9]+)?" step="0.01" title="The number input must start with a number and use either a dot as a decimal character." >
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal__footer">
                <button class="button--red" onclick="wallet.close(event)"><span>Close</span></button>
                <button class="button--green"><span>Save</span></button>
            </div>
        </form>
    </div>
    <div class="modal__container js-container js-modalSubtractAmount">
        <form action="{{ route('subtractAmount') }}" method="POST">
            @csrf
            <input type="hidden" name="walletID" value="">

            <div class="modal__header">
                Subtract amount
            </div>
            <div class="modal__content">
                <div class="table">
                    <div class="table__container">
                        <div class="table__row">
                            <div class="table__col">
                                Amount:
                            </div>
                            <div class="table__col">
                                <input type="text" value="" name="amount" pattern="[0-9]+([\.][0-9]+)?" step="0.01" title="The number input must start with a number and use either a dot as a decimal character.">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal__footer">
                <button class="button--red" onclick="wallet.close(event)"><span>Close</span></button>
                <button class="button--green"><span>Save</span></button>
            </div>
        </form>
    </div>
</div>
