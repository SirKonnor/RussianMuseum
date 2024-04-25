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

function showButtons() {
    document.querySelector('.buttons').style.display = 'block';
  }
  
  function hideButtons() {
    document.querySelector('.buttons').style.display = 'none';
  }

  function buyexcurs() {
    alert('Билет успешно куплен!');
}

function openPopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "block";
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