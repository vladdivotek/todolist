// import Swal from 'sweetalert2';
// window.Swal = Swal;

if (document.querySelectorAll('[data-modal-board]')) {
    document.querySelectorAll('[data-modal-board]').forEach(element => {
        let csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let body = document.querySelector('body');
        let feedback_modal = document.querySelector('.feedback-modal');
        let feedback_form = feedback_modal.querySelector('.feedback-form');
        let feedback_form_action = feedback_form.getAttribute('action');
        let feedback_submit = feedback_form.querySelector('.fn_submit_feedback');

        element.addEventListener('click', function () {
            body.classList.add('block');
            feedback_modal.classList.add('open');

            feedback_modal.querySelector('[data-close]').addEventListener('click', function () {
                body.classList.remove('block');
                feedback_modal.classList.remove('open');
            });

            feedback_modal.addEventListener('click', function (event) {
                if (event.target === event.currentTarget) {
                    body.classList.remove('block');
                    feedback_modal.classList.remove('open');
                }
            });
        });

        feedback_submit.addEventListener('click', function () {
            let feedback_form_data = {
                __token: csrf,
                'service': feedback_form.querySelector('[name=feedback_name]').value,
                'name': feedback_form.querySelector('[name=feedback_name]').value,
                'email': feedback_form.querySelector('[name=feedback_email]').value,
                'phone': feedback_form.querySelector('[name=feedback_phone]').value,
                'message': feedback_form.querySelector('[name=feedback_message]').value,
            };

            if (!feedback_form.checkValidity()) {
                feedback_form.classList.add('was-validated');
                return;
            }

            this.setAttribute('disabled', true);

            axios.post(feedback_form_action, feedback_form_data)
                .then(function (response) {
                    Swal.fire({
                        title: response.data.success_message,
                        // text: response.data.status_message,
                        icon: 'success',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#219dea',
                        timer: 2000,
                        timerProgressBar: true
                    });
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                })
                .catch(function (error) {
                    console.log(error);
                });
        });
    })
}
