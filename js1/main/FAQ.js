$(document).ready(function() {
  $('.question_and_answer').click(function() {
    // Находим родительский элемент .faq, содержащий вопрос и ответ
    
    $('.question_and_answer').removeClass('active_field');

    $(this).addClass('active_field');
  
  });
});