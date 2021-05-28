import axios from 'axios'

class Search {
    constructor(){
        //1. describe and create/initiate our object
        this.addSearchHTML();
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
        this.searchField.addEventListener('keyup', () => this.typingLodgic())
    }
    //3. methods
    typingLodgic(){
        if(this.searchField.value !== this.previousValue){
            clearTimeout(this.typingTimer)

            if(this.searchField.value){
                if(!this.isSpinnervisible){
                    this.resultsDiv.innerHTML = '<div class="spinner-loader"></div>'
                    this.isSpinnervisible = true
                }
                this.typingTimer = setTimeout(this.getResults.bind(this), 750)
            }else{
                this.resultsDiv.innerHTML = ''
                this.isSpinnervisible = false
            }
        }
        this.previousValue = this.searchField.value
    }
    async  getResults() {
        try {
          const response = await axios.get(deafsaskData.root_url + '/wp-json/deafsask/v1/search?term=' + this.searchField.value);
         const results = response.data
         console.log(results)
         if(!results.generalInfo.length && !results.events.length && !results.news.length && !results.resources.length){
             this.resultsDiv.innerHTML = `
                <h2>No results</h2>
             `
         }else{
            if(results.generalInfo.length){
                this.resultsDiv.innerHTML += `
                 <div class="search search-events">
                    <h1>General Information</h1>
                    <ul>
                        ${results.generalInfo.map(item => {
                            return `
                                <li>
                                    <a href="${item.permalink}"><h2>${item.title}</h2></a>
                                    <p>${item.excerpt}</p>
                                </li>
                            `
                        }).join('')}
                    </ul>
                 </div>
                `
            }
            if(results.events.length){
                this.resultsDiv.innerHTML += `
                 <div class="search search-events">
                    <h1>Events</h1>
                    <ul>
                        ${results.events.map(item => {
                            return `
                                <li>
                                    <a href="${item.permalink}"><h2>${item.title}</h2></a>
                                    <p>${item.excerpt}</p>
                                </li>
                            `
                        }).join('')}
                    </ul>
                 </div>
                `
            }
            if(results.news.length){
                this.resultsDiv.innerHTML += `
                 <div class="search search-events">
                    <h1>News</h1>
                    <ul>
                        ${results.news.map(item => {
                            return `
                                <li>
                                    <a href="${item.permalink}"><h2>${item.title}</h2></a>
                                    <p>${item.excerpt}</p>
                                </li>
                            `
                        }).join('')}
                    </ul>
                 </div>
                `
            }
            if(results.resources.length){
                this.resultsDiv.innerHTML += `
                 <div class="search search-events last">
                    <h1>Resources</h1>
                    <ul>
                        ${results.resources.map(item => {
                            return `
                                <li>
                                    <a href="${item.permalink}"><h2>${item.title}</h2></a>
                                    <p>${item.excerpt}</p>
                                </li>
                            `
                        }).join('')}
                    </ul>
                 </div>
                `
            }
        }
        if(document.querySelector('.spinner-loader')){
            document.querySelector('.spinner-loader').style.display = 'none'
        }
        this.isSpinnervisible = false
        } catch (error) {
          console.error(error);
        }
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
    addSearchHTML(){
        document.body.insertAdjacentHTML('beforeend',`
        <div id='search-overlay' class="search-overlay">
        <div class="search-overlay__top">
            <div class="search_container">
                <i class="fa fa-search search-overlay__icon" aria="hidden"></i>
                <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
                <i id='fa-window-close' class="fa fa-window-close" aria="hidden"></i>
            </div>
        </div>
        <div class="search-results-container">
            <div id="search-results" class="search-results"></div>
        </div>
    </div>
        `)
    }
}

export default Search