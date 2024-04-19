function getExhibits(museumID) {

}

function getStaff(museumID) {
    
}

function showButtons() {
    document.querySelector('.buttons').style.display = 'block';
  }
  
  function hideButtons() {
    document.querySelector('.buttons').style.display = 'none';
  }

  function buyTicket() {
    alert('Билет успешно куплен!');
}

let blocksVisible = false;
    
        function toggleBlocks() {
            const blocks = document.querySelectorAll('.hidden');
            blocks.forEach(block => {
                if (blocksVisible) {
                    block.style.display = 'none';
                } else {
                    block.style.display = 'block';
                }
            });
            blocksVisible = !blocksVisible;
        }