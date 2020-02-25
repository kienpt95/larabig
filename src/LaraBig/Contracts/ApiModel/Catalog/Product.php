<?php

namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;

interface Product
{
    const PREFIX = 'products';
    const VERSION = 'v3';

    /**
     * Get list of products
     * GET /catalog/products
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/getproducts
     * @return mixed
     */
    public function all();

    /**
     * Get a Product
     * GET /catalog/products/{product_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/getproductbyid
     * @param $id
     * return mixed
     */
    public function get($id);

    /**
     * Create a Product
     * POST /catalog/products
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/createproduct
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Update a product
     * PUT /catalog/products/{product_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/updateproduct
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data);

    /**
     * Deletes a Product
     * DELETE /catalog/products/{product_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/deleteproductbyid
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * Get a list of Bulk Pricing Rules
     * GET /catalog/products/{product_id}/bulk-pricing-rules
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/getbulkpricingrules
     * @param $product_id
     * @return mixed
     */
    public function  getAllBulkPricingRules($product_id);

    /**
     * Creates a Bulk Pricing Rule.
     * POST /catalog/products/{product_id}/bulk-pricing-rules
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/createbulkpricingrule
     * @param $product_id
     * @param
     * @return mixed
     */
    public function createBulkPricingRule($product_id, $data);

    /**
     * Get a single Bulk Pricing Rule
     * GET /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/getbulkpricingrulebyid
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @return mixed
     */
    public function getBulkPricingRule($product_id, $bulk_pricing_rule_id);

    /**
     * Updates a Bulk Pricing Rule.
     * PUT /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/updatebulkpricingrule
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @param $data
     * @return mixed
     */
    public function updateBulkPricingRule($product_id, $bulk_pricing_rule_id, $data);

    /**
     * Deletes a Bulk Pricing Rule.
     * DELETE /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/deletebulkpricingrulebyid
     * @param $product_id
     * @param $bulk_pricing_rule_id
     */
    public function deleteBulkPricingRule($product_id, $bulk_pricing_rule_id);

    /**
     * Get a list of all product Complex Rules
     * GET /catalog/products/{product_id}/complex-rules
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/getcomplexrules
     * @param $product_id
     * @return mixed
     */
    public function getComplexRules($product_id);

    /**
     * Get a single Product Metafield.
     * GET /catalog/products/{product_id}/complex-rules/{complex_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/getcomplexrulebyid
     * @param $product_id
     * @param $complex_rule_id
     * @return  mixed
     */
    public function getComplexRule($product_id, $complex_rule_id);

    /**
     * Creates a product Complex Rule
     * POST /catalog/products/{product_id}/complex-rules
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/createcomplexrule
     * @param $product_id
     * @param $data
     * @return  mixed
     */
    public function  createComplexRule($product_id, $data);

    /**
     * Updates a product Complex Rule.
     * PUT /catalog/products/{product_id}/complex-rules/{complex_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/updatecomplexrule
     * @param $product_id
     * @param $complex_rule_id
     * @param $data
     * @return mixed
     */
    public function updateComplexRule($product_id, $complex_rule_id , $data);

    /**
     * Deletes a product Complex Rule.
     * DELETE /catalog/products/{product_id}/complex-rules/{complex_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/deletecomplexrulebyid
     * @param $product_id
     * @param $complex_rule_id
     * @param $data
     * return mixed
     */
    public function DeleteComplexRule($product_id, $complex_rule_id , $data);

    /**
     * Get a list of product Custom Fields.
     * GET /catalog/products/{product_id}/custom-fields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-custom-fields/getcustomfields
     * @param $product_id
     * @return mixed
     */
    public function getCustomFields($product_id);

    /**
     * Get a single Custom Field.
     * GET /catalog/products/{product_id}/custom-fields/{custom_field_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-custom-fields/getcustomfieldbyid
     * @param $product_id
     * @param $custom_field_id
     * @return mixed
     */
    public function getCustomField($product_id, $custom_field_id);

    /**
     * Creates a Custom Field
     * POST /catalog/products/{product_id}/custom-fields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-custom-fields/createcustomfield
     * @param $product_id
     * @return mixed
     */
    public function createCustomField($product_id, $data);

    /**
     * Updates a Custom Field
     * PUT /catalog/products/{product_id}/custom-fields/{custom_field_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-custom-fields/updatecustomfield
     * @param $product_id
     * @param $custom_field_id
     * @param $data
     * @return mixed
     */
    public function updateCustomField($product_id, $custom_field_id, $data);

    /**
     * Deletes a product Custom Field
     * DELETE /catalog/products/{product_id}/custom-fields/{custom_field_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-custom-fields/deletecustomfieldbyid
     * @param $product_id
     * @param $custom_field_id
     * @return mixed
     */
    public function deleteCustomField($product_id, $custom_field_id);

    /**
     * GET a list of Product Images.
     * GET /catalog/products/{product_id}/images
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/getproductimages
     * @param $product_id
     * @return mixed
     */
    public function getAllImages($product_id);

    /**
     * Get a single Product Image
     * GET /catalog/products/{product_id}/images/{image_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/getproductimagebyid
     * @param $product_id
     * @param $image_id
     * @return mixed
     */
    public function getImage($product_id, $image_id);

    /**
     * Creates a Product Image.
     * POST /catalog/products/{product_id}/images
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/createproductimage
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function createImage($product_id, $data);

    /**
     * Updates a Product Image
     * PUT /catalog/products/{product_id}/images/{image_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/updateproductimage
     * @param $product_id
     * @param $image_id
     * @param $data
     * @return mixed
     */
    public function updateImage($product_id, $image_id, $data);

    /**
     * Deletes a Product Image.
     * DELETE /catalog/products/{product_id}/images/{image_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/deleteproductimage
     * @param $product_id
     * @param $image_id
     * @return mixed
     */
    public function deleteImage($product_id, $image_id);

    /**
     * Get a list of Product Metafields.
     * GET /catalog/products/{product_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/getproductmetafieldsbyproductid
     * @param $product_id
     * @return mixed
     */
    public function getAllMetaFields($product_id);

    /**
     * Get a single Product Metafield
     * GET /catalog/products/{product_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/getproductmetafieldbyproductid
     * @param $product_id
     * @param $metafields_id
     * @return mixed
     */
    public function getMetafields($product_id, $metafields_id);

    /**
     * Creates a Product Metafield.
     * POST /catalog/products/{product_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/createproductmetafield
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function createMetafields($product_id, $data);

    /**
     * Updates a Product Metafield
     * PUT /catalog/products/{product_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/updateproductmetafield
     * @param $product_id
     * @param $metafield_id
     * @return mixed
     */
    public function updateMetafields($product_id, $metafield_id);

    /**
     * Deletes a Product Metafield
     * DELETE /catalog/products/{product_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/deleteproductmetafieldbyid
     * @param $product_id
     * @param $metafield_id
     * @return mixed
     */
    public function deleteMetafield($product_id, $metafield_id);

    /**
     * Get a list of all Product Modifiers.
     * GET /catalog/products/{product_id}/modifiers
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifiers/getmodifiers
     * @param $product_id
     * @return mixed
     */
    public function getAllModifiers($product_id);

    /**
     * Get a single Product Modifier.
     * GET /catalog/products/{product_id}/modifiers/{modifier_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifiers/getmodifierbyid
     * @param $product_id
     * @param $modifier_id
     * @return mixed
     */
    public function getModifier($product_id, $modifier_id);

    /**
     * Create a Product Modifier;
     * POST /catalog/products/{product_id}/modifiers
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifiers/createmodifier
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function createModifier($product_id, $data);

    /**
     * Update Modifiers
     * PUT /catalog/products/{product_id}/modifiers/{modifier_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifiers/updatemodifier
     * @param $product_id
     * @param $modifier_id
     * @return mixed
     */
    public function updateModifier($product_id, $modifier_id, $data);

    /**
     * Delete Modifier
     * DELETE /catalog/products/{product_id}/modifiers/{modifier_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifiers/deletemodifierbyid
     * @param $product_id
     * @param $modifier_id
     * @return mixed
     */
    public function deleteModifier($product_id, $modifier_id);

    /**
     * Get a list of all product Modifier Values
     * GET /catalog/products/{product_id}/modifiers/{modifier_id}/values
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-values/getmodifiervalues
     * @param $product_id
     * @param $modifier_id
     * @return mixed
     */
    public function getAllModifierValues($product_id, $modifier_id);

    /**
     * Get a single Modifier Value.
     * GET /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-values/getmodifiervaluebyid
     * @param $product_id
     * @param $modifier_id
     * @param $value_id
     * @return mixed
     */
    public function getModifierValue($product_id, $modifier_id, $value_id);

    /**
     * Create a Modifier Value
     * POST /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-values/createmodifiervalue
     * @param $product_id
     * @param $modifier_id
     * @param $data
     * @return mixed
     */
    public function createModifierValue($product_id, $modifier_id,$data);

    /**
     * Update a Modifier Value
     * PUT /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-values/updatemodifiervalue
     * @param $product_id
     * @param $modifier_id
     * @param $value_id
     * @param $data
     * @return mixed
     */
    public function updateModifierValue($product_id, $modifier_id, $value_id, $data);

    /**
     * Delete modifier value
     * DELETE /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-values/deletemodifiervaluebyid
     * @param $product_id
     * @param $modifier_id
     * @param $value_id
     * @return mixed
     */
    public function deleteModifierValue($product_id, $modifier_id, $value_id);

    /**
     * Creates a Modifier Image.
     * POST /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}/image
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-images/createmodifierimage
     * @param $product_id
     * @param $modifier_id
     * @param $value_id
     * @param $data
     * @return mixed
     */
    public function createModifierImage($product_id, $modifier_id, $value_id, $data);

    /**
     * Deletes a Modifier Image.
     * DELETE /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}/image
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-images/deletemodifierimage
     * @param $product_id
     * @param $modifier_id
     * @param $value_id
     * @return mixed
     */
    public function deleteModifierImage($product_id, $modifier_id, $value_id);

    /**
     * Get a list of product Variant Options.
     * GET /catalog/products/{product_id}/options
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-options/getoptions
     * @param $product_id
     * @return mixed
     */
    public function getAllOptions($product_id);

    /**
     * Get a single Variant Option.
     * GET /catalog/products/{product_id}/options/{option_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-options/getoptionbyid
     * @param $product_id
     * @param $option_id
     * @return mixed
     */
    public function  getOption($product_id, $option_id);

    /**
     * Creates a Variant Option.
     * POST /catalog/products/{product_id}/options
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-options/createoption
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function createOption($product_id, $data);
    /**
     * Deletes a Variant Option.
     * DELETE /catalog/products/{product_id}/options/{option_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-options/deleteoptionbyid
     * @param $product_id
     * @param $data
     * @return mixed
     */

    public function deleteOption($product_id, $option_id);

    /**
     * Get a list of all Variant Option Values.
     * GET /catalog/products/{product_id}/options/{option_id}/values
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/getoptionvalues
     * @param $product_id
     * @param $option_id
     * @return mixed
     */
    public function getAllOptionValues($product_id, $option_id);

    /**
     * Get a single Variant Option Value
     * GET /catalog/products/{product_id}/options/{option_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/getoptionvaluebyid
     * @param $product_id
     * @param $option_id
     * @param $value_id
     * @return mixed
     */
    public function getOptionValue($product_id, $option_id, $value_id);

    /**
     * Creates a Variant Option Value.
     * POST /catalog/products/{product_id}/options/{option_id}/values
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/createoptionvalue
     * @param $product_id
     * @param $option_id
     * @param $data
     * @return mixed
     */
    public function createOptionValues($product_id, $option_id, $data);

    /**
     * Updates a Variant Option Value.
     * PUT /catalog/products/{product_id}/options/{option_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/updateoptionvalue
     * @param $product_id
     * @param $option_id
     * @param $data
     * @return mixed
     */
    public function updateOptionValues($product_id, $option_id,$value_id, $data);

    /**
     * Deletes a Variant Option Value.
     * DELETE /catalog/products/{product_id}/options/{option_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/deleteoptionvaluebyid
     * @param $product_id
     * @param $option_id
     * @param $value_id
     * @return mixed
     */
    public function deleteOptionValues($product_id, $option_id, $value_id);

    /**
     * Get a list of all Product Reviews
     * GET /catalog/products/{product_id}/reviews
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/getproductreviews
     * @param $product_id
     * @return mixed
     */
    public function getAllReviews($product_id);

    /**
     * Get a single Product Review.
     * GET /catalog/products/{product_id}/reviews/{review_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/getproductreviewbyid
     * @param $product_id
     * @param $review_id
     * @return mixed
     */
    public function getReview($product_id, $review_id);

    /**
     * Creates a Product Review.
     * POST /catalog/products/{product_id}/reviews
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/createproductreview
     * @param $product_id
     * @return mixed
     */
    public function createReview($product_id, $data);

    /**
     * Updates a Product Review.
     * PUT /catalog/products/{product_id}/reviews/{review_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/updateproductreview
     * @param $product_id
     * @param $review_id
     * @param $data
     * @return mixed
     */
    public function updateReview($product_id, $review_id, $data);

    /**
     * Deletes a Product Review
     * DELETE /catalog/products/{product_id}/reviews/{review_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/deleteproductreview
     * @param $product_id
     * @param $review_id
     * @return mixed
     */
    public function deleteReview($product_id, $review_id);

    /**
     * Returns a list of product Variants
     * GET /catalog/products/{product_id}/variants
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/getvariantsbyproductid
     * @param $product_id
     * @return mixed
     */
    public function getAllVariants($product_id);

    /**
     * Get a single product Variant
     * GET /catalog/products/{product_id}/variants/{variant_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/getvariantsbyproductid
     * @param $product_id
     * @param $variant_id
     * @return mixed
     */
    public function getVariant($product_id, $variant_id);

    /**
     * Creates a Product Variant.
     * POST /catalog/products/{product_id}/variants
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/getvariantsbyproductid
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function createVariant($product_id, $data);

    /**
     * Updates a product Variant.
     * PUT /catalog/products/{product_id}/variants/{variant_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/updatevariant
     * @param $product_id
     * @param $variant_id
     * @param $data
     * @return mixed
     */
    public function updateVariant($product_id, $variant_id, $data);

    /**
     * Deletes a product Variant.
     * DELETE /catalog/products/{product_id}/variants/{variant_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/deletevariantbyid
     * @param $product_id
     * @param $variant_id
     * @return mixed
     */
    public function deleteVariant($product_id, $variant_id);

    /**
     * Creates a Variant Image.
     * POST /catalog/products/{product_id}/variants/{variant_id}/image
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/createvariantimage
     * @param $product_id
     * @param $variant_id
     * @param $data
     * @return mixed
     */
    public function createVariantImage($product_id, $variant_id, $data);

    /**
     * Get a list of product variant Metafields.
     * GET /catalog/products/{product_id}/variants/{variant_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/getvariantmetafieldsbyproductidandvariantid
     * @param $product_id
     * @param $variant_id
     * @return mixed
     */
    public function getAllVariantMetafields($product_id, $variant_id);

    /**
     * Get a single product variant Metafield.
     * GET /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/getvariantmetafieldbyproductidandvariantid
     * @param $product_id
     * @param $variant_id
     * @param $metafield_id
     * @return mixed
     */
    public function getVariantMetafields($product_id, $variant_id, $metafield_id);

    /**
     * Creates a product variant Metafield.
     * POST /catalog/products/{product_id}/variants/{variant_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/createvariantmetafield
     * @param $product_id
     * @param $variant_id
     * @param $data
     * @return mixed
     */
    public function createVariantMetafield($product_id, $variant_id, $data);

    /**
     * Updates a product variant Metafield.
     * PUT /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/updatevariantmetafield
     * @param $product_id
     * @param $variant_id
     * @param $metafield_id
     * @param $data
     * @return mixed
     */
    public function  updateVariantMetafield($product_id, $variant_id,$metafield_id, $data);
    /**
     * Deletes a product variant Metafield.
     * DELETE /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/deletevariantmetafieldbyid
     * @param $product_id
     * @param $variant_id
     * @param $metafield_id
     * @return mixed
     */
    public function  deleteVariantMetafield($product_id, $variant_id,$metafield_id);

    /**
     * Updates a Variant Option.
     * PUT /catalog/products/{product_id}/options/{option_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/deletevariantmetafieldbyid
     * @param $product_id
     * @param $option_id
     * @param $data
     * @return mixed
     */
    public function  updateOption($product_id, $option_id, $data);

    /**
     * Get a list of Product Videos.
     * GET /catalog/products/{product_id}/videos
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/deletevariantmetafieldbyid
     * @param $product_id
     * @return mixed
     */
    public function getAllVideos($product_id);

    /**
     * Returns a single Product Video.
     * GET /catalog/products/{product_id}/videos/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/getproductvideobyid
     * @param $product_id
     * @param $id
     * @return mixed
     */
    public function  getVideo($product_id, $id);

    /**
     * Creates a Product Video.
     * POST /catalog/products/{product_id}/videos
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/getproductvideobyid
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function createVideo($product_id, $data);

    /**
     * Updates a *Product Video.
     * PUT /catalog/products/{product_id}/videos/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/getproductvideobyid
     * @param $product_id
     * @param $video_id
     * @param $data
     * @return mixed
     */
    public function updateVideo($product_id, $video_id, $data);

    /**
     * Deletes a Product Video.
     * DELETE /catalog/products/{product_id}/videos/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/deleteproductvideo
     * @param $product_id
     * @param $video_id
     * @return mixed
     */
    public function deleteVideo($product_id, $video_id);

}
