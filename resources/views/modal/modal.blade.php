<div class="modal js-modal">
    <div class="modal__container">
        <form action="" method="POST">
            @csrf
            <div class="modal__header">
                Themes options
            </div>
            <div class="modal__content">
                    <div class="table">
                        <div class="table__container">
                            <div class="table__row">
                                <div class="table__col">
                                    Background color:
                                </div>
                                <div class="table__col">
                                    <select class="select" name="themeColor">
                                        <option value="dark">Dark</option>
                                        <option value="light">Light</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal__footer">
                <button class="button--red" onclick="options.switchModal(event)"><span>Close</span></button>
                <button class="button--green"><span>Save</span></button>
            </div>
        </form>
    </div>
</div>
