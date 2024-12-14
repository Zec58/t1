document.addEventListener("DOMContentLoaded", function () {
    // Считываем параметр redirect из URL
    const params = new URLSearchParams(window.location.search);
    const redirectUrl = params.get("redirect"); // Получаем значение параметра `redirect`

    // Ссылка на кнопку
    const button = document.getElementById("continue-button");

    if (redirectUrl) {
        // Показываем кнопку и добавляем действие при клике
        button.style.display = "inline-block";
        button.addEventListener("click", function () {
            window.location.href = redirectUrl; // Перенаправляем по URL из параметра
        });
    } else {
        // Если параметра нет, скрываем кнопку
        button.style.display = "none";
    }
});
