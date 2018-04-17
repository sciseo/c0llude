document.addEventListener('DOMContentLoaded', function() {
  document.getElementsByClassName("taskdel").addEventListener("click", refresh);
  document.getElementByID("ta-sub").addEventListener("click", refresh);
  document.getElementByID("ca-sub").addEventListener("click", refresh);
});

function refresh() {
    window.location.href=window.location.href;
}
