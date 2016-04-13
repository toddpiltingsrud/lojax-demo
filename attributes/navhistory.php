<h3>Navigation History</h3>

<p>
    Preface a URL with a hash (#) symbol to log it into the browser's navigation history.
    lojax handles the hashchange event and tests the hash to see if there's an anchor name on the page that matches it.
    If not, lojax assumes it's a URL and issues a request for it.
</p>