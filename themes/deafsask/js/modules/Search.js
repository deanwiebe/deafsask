class Search {
    constructor(){
        //1. describe and create/initiate our object
        this.resultsDiv = document.getElementById('search-results')
        this.openSearchOverlay = document.getElementById('fa-search')
        this.closeSearchOverlay = document.getElementById('fa-window-close')
        this.searchOverlay = document.getElementById('search-overlay')
        this.searchField = document.getElementById('search-term')
        this.isOverlayOpen = false
        this.isSpinnervisible = false
        this.previousValue
        this.typingTimer
        this.events()
    }

    //2.events
    events(){
        this.openSearchOverlay.addEventListener('click', () => this.openOverlay())
        this.closeSearchOverlay.addEventListener('click', () => this.closeOverlay())
        document.addEventListener('keydown', (e) => this.keyPressDispatcher(e))
        this.searchField.addEventListener('keyup', () => this.typingLodgic())
    }
    //3. methods
    typingLodgic(){
        if(this.searchField.value !== this.previousValue){
            clearTimeout(this.typingTimer)
            if(!this.isSpinnervisible){
                this.resultsDiv.innerHTML = '<div class="spinner-loader"></div>'
                this.isSpinnervisible = true
            }
        this.typingTimer = setTimeout(this.getResults.bind(this), 2000)
        }
        this.previousValue = this.searchField.value
    }
    getResults(){
        this.resultsDiv.innerHTML = this.previousValue
        this.isSpinnervisible = false
    }
    openOverlay(){
        this.searchOverlay.classList.add('search-overlay-active')
        document.body.style.overflow = 'hidden'
        this.isOverlayOpen = true
        this.searchField.focus()
        this.searchField.value = ''
        console.log('open method')
    }
    closeOverlay(){
        this.searchOverlay.classList.remove('search-overlay-active')
        document.body.style.overflow = 'unset'
        this.isOverlayOpen = false
        console.log('close Method')
    }
    keyPressDispatcher(e){
        if(e.keyCode == 83 && this.isOverlayOpen == false){
            this.openOverlay()
        }
        if(e.keyCode == 27 && this.isOverlayOpen == true){
            this.closeOverlay()
        }
    }
}

export default Search