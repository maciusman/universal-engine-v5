document.addEventListener('DOMContentLoaded', function() {
    const faqToggles = document.querySelectorAll('.faq-section__question-toggle');
    
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const question = this.closest('.faq-section__question');
            const isOpen = question.classList.contains('is-open');
            const answer = question.querySelector('.faq-section__answer');
            const icon = this.querySelector('.faq-section__question-icon');
            
            // Close all other questions in the same category
            const category = question.closest('.faq-section__category');
            const otherQuestions = category.querySelectorAll('.faq-section__question');
            otherQuestions.forEach(otherQuestion => {
                if (otherQuestion !== question) {
                    otherQuestion.classList.remove('is-open');
                    const otherToggle = otherQuestion.querySelector('.faq-section__question-toggle');
                    otherToggle.setAttribute('aria-expanded', 'false');
                }
            });
            
            // Toggle current question
            if (isOpen) {
                question.classList.remove('is-open');
                this.setAttribute('aria-expanded', 'false');
            } else {
                question.classList.add('is-open');
                this.setAttribute('aria-expanded', 'true');
            }
        });
    });
});