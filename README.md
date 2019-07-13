# site_information
1. Enable the module
2. Need to enable serializer module in core.
3. go to site information form to add apikey (any exsisting node id of content type page)
4. go to /node-json to check json response to node

Output

```
"{\"nid\":[{\"value\":1}],\"uuid\":[{\"value\":\"6f716b09-2f16-4b02-b346-0db6c06a8d41\"}],\"vid\":[{\"value\":1}],\"langcode\":[{\"value\":\"en\"}],\"type\":[{\"target_id\":\"page\",\"target_type\":\"node_type\",\"target_uuid\":\"451216b5-3c00-4ce0-b6d7-4e51ecf8e1e9\"}],\"revision_timestamp\":[{\"value\":\"2019-07-13T08:15:15+00:00\",\"format\":\"Y-m-d\\\\TH:i:sP\"}],\"revision_uid\":[{\"target_id\":1,\"target_type\":\"user\",\"target_uuid\":\"84b8394c-e161-437a-9873-63a34b532924\",\"url\":\"\\\/user\\\/1\"}],\"revision_log\":[],\"status\":[{\"value\":true}],\"uid\":[{\"target_id\":1,\"target_type\":\"user\",\"target_uuid\":\"84b8394c-e161-437a-9873-63a34b532924\",\"url\":\"\\\/user\\\/1\"}],\"title\":[{\"value\":\"test\"}],\"created\":[{\"value\":\"2019-07-13T08:14:54+00:00\",\"format\":\"Y-m-d\\\\TH:i:sP\"}],\"changed\":[{\"value\":\"2019-07-13T08:15:15+00:00\",\"format\":\"Y-m-d\\\\TH:i:sP\"}],\"promote\":[{\"value\":false}],\"sticky\":[{\"value\":false}],\"default_langcode\":[{\"value\":true}],\"revision_translation_affected\":[{\"value\":true}],\"path\":[{\"alias\":null,\"pid\":null,\"langcode\":\"en\"}],\"body\":[]}"
```

5. if node not present in db it will give you error access denied 



##Reference

https://drupal.stackexchange.com/questions/191419/drupal-8-node-serialization-to-json
https://www.drupal.org/docs/8/converting-drupal-7-modules-to-drupal-8/step-4-convert-drupal-7-variables-to-drupal-8


