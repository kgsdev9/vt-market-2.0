import './bootstrap';


document.addEventListener('DOMContentLoaded', () => {
    console.Log('dom loading');
})

document.addEventListener('livewire:navigated', () => {
    console.log('Navigated');
})
