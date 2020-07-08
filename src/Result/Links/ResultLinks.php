<?php

namespace Gusdecool\EnvatoSDK\Result\Links;

class ResultLinks
{
    /**
     * URL to retrieve the next page of documents
     */
    public ?string $next_page_url;

    /**
     * URL to retrieve the previous page of documents
     */
    public ?string $prev_page_url;

    /**
     * URL to retrieve the first page of documents
     */
    public ?string $first_page_url;

    /**
     * URL to retrieve the last page of documents
     */
    public ?string $last_page_url;
}
