<?php

if (! function_exists('slug_get_model')) {
    function slug_get_model($slug, $class = null)
    {
        return app(\Lightframes\SlugMaker\SlugHelper::class)->getModel($slug, $class);
    }
}

if (! function_exists('slug_get_models')) {
    function slug_get_models($slugs, $class = null)
    {
        return app(\Lightframes\SlugMaker\SlugHelper::class)->getModels($slugs, $class);
    }
}

if (! function_exists('slug_get_id')) {
    function slug_get_id($slug, $class = null)
    {
        return app(\Lightframes\SlugMaker\SlugHelper::class)->getId($slug, $class);
    }
}

if (! function_exists('slug_get_ids')) {
    function slug_get_ids($slugs, $class = null)
    {
        return app(\Lightframes\SlugMaker\SlugHelper::class)->getIds($slugs, $class);
    }
}

if (! function_exists('slug_get_grouped_class')) {
    function slug_get_grouped_class($attributes, $useId = false)
    {
        return app(\Lightframes\SlugMaker\SlugHelper::class)->getIdsGroupedByClass($attributes, $useId);
    }
}

if (! function_exists('slug_get')) {
    function slug_get($model)
    {
        return app(\Lightframes\SlugMaker\SlugHelper::class)->getSlugName($model);
    }
}

if (! function_exists('slug_make')) {
    function slug_make($model, $slug = '')
    {
        return app(\Lightframes\SlugMaker\SlugHelper::class)->makeForModel($model, $slug);
    }
}

if (! function_exists('slug_delete')) {
    function slug_delete($model)
    {
        return app(\Lightframes\SlugMaker\SlugHelper::class)->deleteByModel($model);
    }
}
