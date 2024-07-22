import './bootstrap';

const searchResults = document.getElementById('search-results');
const searchInput = document.getElementById('search-input');

function httpSearch(query) {
    return fetch('http://127.0.0.1:8000/search/' + query)
        .then(res => {
            if (!res.ok) {
                return {};
            }
            return res.json();
        })
        .catch(err => {
            console.error(err);
            return {};
        });
}

function emptySearchResultsContainer() {
    searchResults.innerHTML = '';
}

searchInput.addEventListener('keyup', function () {
    httpSearch(searchInput.value).then(results => {
        if (results.length != 0) {

            emptySearchResultsContainer();
            
            results.forEach(result => {
                const anchor = document.createElement('a');
                anchor.innerHTML = `${result.title} <span class="font-bold tracking-tighter">\$${result.salary}</span>`;
                anchor.setAttribute('href', `http://127.0.0.1:8000/job-listing/${result.id}`);
                anchor.classList.add('search-result');
                searchResults.appendChild(anchor);
            });

        } else {
            emptySearchResultsContainer();
        }
    });
});

