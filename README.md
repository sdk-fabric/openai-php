
# openai-php

This [SDK](https://github.com/sdk-fabric/openai-php) is managed by the [SDK Fabric](https://sdk-fabric.org/) project, a global infrastructure to
automatically generate SDKs for every API.

You can find more information about this SDK at [TypeHub](https://typehub.cloud/):
https://app.typehub.cloud/d/sdkfabric/openai

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \SdkFabric\Openai\Client::build('[access_token]');

// Creates a model response for the given chat conversation.
$response = $client->completions()->create(new CompletionRequest());

// Delete a stored chat completion.
$response = $client->completions()->delete('completion_id');

// List stored Chat Completions.
$response = $client->completions()->getall('after', 1, 'model', 'order');

// Creates a model response.
$response = $client->responses()->create(new ResponseRequest());
```
