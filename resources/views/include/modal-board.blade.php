<div class="modal1 modal-board">
    <div class="modal-dialog1 modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title">Add new board</span>
                <button type="button" class="btn-close" aria-label="Закрити" data-close></button>
            </div>
            <div class="modal-body1">
                <form method="post" action="" class="feedback-form" novalidate>
                    @csrf
                    <div class="mb-4 has-validation">
                        <input type="text" class="form-control form-control-lg feedback_name" name="feedback_name" placeholder="{{ __('contacts.name') }}" max="100" pattern="^[a-zA-Zа-яА-Я\s-]+$" required>
                        <div class="invalid-feedback">{{ __('modal.incorrect') }} {{ __('modal.name_title') }}</div>
                    </div>
                    <button type="button" class="fn_submit_feedback btn-general w-100 footer-feedback-send" aria-label="{{ __('contacts.send') }}">{{ __('contacts.send') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
