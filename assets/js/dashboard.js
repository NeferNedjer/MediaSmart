const idUserElements = document.querySelectorAll('.id-user-dashboard'); 
const activityVisible = document.querySelectorAll('.activity-visible'); 
const activityHidden = document.querySelectorAll('.activity-hidden');

idUserElements.forEach((idUser) => {
    idUser.addEventListener('click', function() {
        
        activityVisible.forEach((element) => {
            element.style.display = 'none'; 
        });
        activityHidden.forEach((element) => {
            element.style.display = 'block'; 
        });
    });
});

console.log(idUserElements);
console.log(activityVisible);