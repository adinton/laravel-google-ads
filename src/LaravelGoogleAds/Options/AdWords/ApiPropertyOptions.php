<?php

namespace LaravelGoogleAds\Options\AdWords;

use LaravelGoogleAds\Options\Options;

class ApiPropertyOptions extends Options
{
    /** @var array */
    protected $defaults = [
        /*
         * Library
         */
        'lib.product' => 'AdWords',
        'lib.package' => 'GoogleApiAdsAdWords',

        /*
         * WSDL2PHP
         * Optionally specify a proxy to use when processing the WSDLs in the format
         * tcp://host:port.
         */
        'wsdl2php.proxy' => '',

        /*
         * If enabled, class names (but not service names) will be prefixed with the
         * package name. Ex) Google\Api\Ads\AdWords\Campaign
         */
        'wsdl2php.enableNamespaces' => false,

        /*
         * Class map to be used if namespace support is not enabled, to work around
         * common conflicts, in JSON format.
         */
        'wsdl2php.conflictClassmap' => '{"DateTime":"AdWordsDateTime", "SoapHeader":"SoapRequestHeader"}',

        /*
         * Other class fixes.
         */
        'wsdl2php.classmap' => '{"getResponse":"${service}GetResponse", "get":"${service}Get", "mutate":"${service}Mutate", "mutateResponse":"${service}MutateResponse", "mutateCallToAction":"${service}MutateCallToAction", "search":"${service}Search", "Function":"FeedFunction"}',
        'wsdl2php.skipClassNameCheckTypes' => 'Target,Location',

        /*
         * API
         */
        'api.server' => 'https://adwords.google.com',
        'api.versions' => 'v201509,v201601,v201603',
        'api.soapClientClassNamespace' => 'Google_Api_Ads_AdWords_Lib',

        /*
         * v201509
         */
        'api.versions.v201509.namespace' => 'Google_Api_Ads_AdWords_v201509',
        'api.versions.v201509.services' => 'AdGroupAdService,AdGroupBidModifierService,AdGroupCriterionService,AdGroupFeedService,AdGroupService,AdParamService,AdwordsUserListService,BatchJobService,BiddingStrategyService,BudgetOrderService,BudgetService,CampaignCriterionService,CampaignFeedService,CampaignService,ConstantDataService,ConversionTrackerService,CustomerFeedService,CustomerService,CustomerSyncService,DataService,ExperimentService,FeedItemService,FeedMappingService,FeedService,LabelService,LocationCriterionService,ManagedCustomerService,MediaService,MutateJobService,OfflineConversionFeedService,ReportDefinitionService,TargetingIdeaService,TrafficEstimatorService,ExpressBusinessService,ProductServiceService,BudgetSuggestionService,PromotionService,CampaignSharedSetService,SharedCriterionService,SharedSetService,CampaignExtensionSettingService,AdGroupExtensionSettingService,CustomerExtensionSettingService,AdCustomizerFeedService,AccountLabelService',
        'api.versions.v201509.services.AdGroupAdService.wsdl' => '${api.server}/api/adwords/cm/v201509/AdGroupAdService?wsdl',
        'api.versions.v201509.services.AdGroupBidModifierService.wsdl' => '${api.server}/api/adwords/cm/v201509/AdGroupBidModifierService?wsdl',
        'api.versions.v201509.services.AdGroupCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201509/AdGroupCriterionService?wsdl',
        'api.versions.v201509.services.AdGroupFeedService.wsdl' => '${api.server}/api/adwords/cm/v201509/AdGroupFeedService?wsdl',
        'api.versions.v201509.services.AdGroupService.wsdl' => '${api.server}/api/adwords/cm/v201509/AdGroupService?wsdl',
        'api.versions.v201509.services.AdParamService.wsdl' => '${api.server}/api/adwords/cm/v201509/AdParamService?wsdl',
        'api.versions.v201509.services.AdwordsUserListService.wsdl' => '${api.server}/api/adwords/rm/v201509/AdwordsUserListService?wsdl',
        'api.versions.v201509.services.BatchJobService.wsdl' => '${api.server}/api/adwords/cm/v201509/BatchJobService?wsdl',
        'api.versions.v201509.services.BiddingStrategyService.wsdl' => '${api.server}/api/adwords/cm/v201509/BiddingStrategyService?wsdl',
        'api.versions.v201509.services.BudgetOrderService.wsdl' => '${api.server}/api/adwords/billing/v201509/BudgetOrderService?wsdl',
        'api.versions.v201509.services.BudgetService.wsdl' => '${api.server}/api/adwords/cm/v201509/BudgetService?wsdl',
        'api.versions.v201509.services.BudgetSuggestionService.wsdl' => '${api.server}/api/adwords/express/v201509/BudgetSuggestionService?wsdl',
        'api.versions.v201509.services.CampaignCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201509/CampaignCriterionService?wsdl',
        'api.versions.v201509.services.CampaignFeedService.wsdl' => '${api.server}/api/adwords/cm/v201509/CampaignFeedService?wsdl',
        'api.versions.v201509.services.CampaignService.wsdl' => '${api.server}/api/adwords/cm/v201509/CampaignService?wsdl',
        'api.versions.v201509.services.CampaignSharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201509/CampaignSharedSetService?wsdl',
        'api.versions.v201509.services.ConstantDataService.wsdl' => '${api.server}/api/adwords/cm/v201509/ConstantDataService?wsdl',
        'api.versions.v201509.services.ConversionTrackerService.wsdl' => '${api.server}/api/adwords/cm/v201509/ConversionTrackerService?wsdl',
        'api.versions.v201509.services.CustomerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201509/CustomerFeedService?wsdl',
        'api.versions.v201509.services.CustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201509/CustomerService?wsdl',
        'api.versions.v201509.services.CustomerSyncService.wsdl' => '${api.server}/api/adwords/ch/v201509/CustomerSyncService?wsdl',
        'api.versions.v201509.services.DataService.wsdl' => '${api.server}/api/adwords/cm/v201509/DataService?wsdl',
        'api.versions.v201509.services.ExperimentService.wsdl' => '${api.server}/api/adwords/cm/v201509/ExperimentService?wsdl',
        'api.versions.v201509.services.ExpressBusinessService.wsdl' => '${api.server}/api/adwords/express/v201509/ExpressBusinessService?wsdl',
        'api.versions.v201509.services.FeedItemService.wsdl' => '${api.server}/api/adwords/cm/v201509/FeedItemService?wsdl',
        'api.versions.v201509.services.FeedMappingService.wsdl' => '${api.server}/api/adwords/cm/v201509/FeedMappingService?wsdl',
        'api.versions.v201509.services.FeedService.wsdl' => '${api.server}/api/adwords/cm/v201509/FeedService?wsdl',
        'api.versions.v201509.services.LabelService.wsdl' => '${api.server}/api/adwords/cm/v201509/LabelService?wsdl',
        'api.versions.v201509.services.LocationCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201509/LocationCriterionService?wsdl',
        'api.versions.v201509.services.ManagedCustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201509/ManagedCustomerService?wsdl',
        'api.versions.v201509.services.MediaService.wsdl' => '${api.server}/api/adwords/cm/v201509/MediaService?wsdl',
        'api.versions.v201509.services.MutateJobService.wsdl' => '${api.server}/api/adwords/cm/v201509/MutateJobService?wsdl',
        'api.versions.v201509.services.OfflineConversionFeedService.wsdl' => '${api.server}/api/adwords/cm/v201509/OfflineConversionFeedService?wsdl',
        'api.versions.v201509.services.ProductServiceService.wsdl' => '${api.server}/api/adwords/express/v201509/ProductServiceService?wsdl',
        'api.versions.v201509.services.PromotionService.wsdl' => '${api.server}/api/adwords/express/v201509/PromotionService?wsdl',
        'api.versions.v201509.services.ReportDefinitionService.wsdl' => '${api.server}/api/adwords/cm/v201509/ReportDefinitionService?wsdl',
        'api.versions.v201509.services.SharedCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201509/SharedCriterionService?wsdl',
        'api.versions.v201509.services.SharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201509/SharedSetService?wsdl',
        'api.versions.v201509.services.TargetingIdeaService.wsdl' => '${api.server}/api/adwords/o/v201509/TargetingIdeaService?wsdl',
        'api.versions.v201509.services.TrafficEstimatorService.wsdl' => '${api.server}/api/adwords/o/v201509/TrafficEstimatorService?wsdl',
        'api.versions.v201509.services.CampaignExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201509/CampaignExtensionSettingService?wsdl',
        'api.versions.v201509.services.AdGroupExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201509/AdGroupExtensionSettingService?wsdl',
        'api.versions.v201509.services.CustomerExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201509/CustomerExtensionSettingService?wsdl',
        'api.versions.v201509.services.AdCustomizerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201509/AdCustomizerFeedService?wsdl',
        'api.versions.v201509.services.AccountLabelService.wsdl' => '${api.server}/api/adwords/mcm/v201509/AccountLabelService?wsdl',

        /*
         * v201601
         */
        'api.versions.v201601.namespace' => 'Google_Api_Ads_AdWords_v201601',
        'api.versions.v201601.services' => 'AdGroupAdService,AdGroupBidModifierService,AdGroupCriterionService,AdGroupFeedService,AdGroupService,AdParamService,AdwordsUserListService,BatchJobService,BiddingStrategyService,BudgetOrderService,BudgetService,CampaignCriterionService,CampaignFeedService,CampaignService,ConstantDataService,ConversionTrackerService,CustomerFeedService,CustomerService,CustomerSyncService,DataService,ExperimentService,FeedItemService,FeedMappingService,FeedService,LabelService,LocationCriterionService,ManagedCustomerService,MediaService,MutateJobService,OfflineConversionFeedService,ReportDefinitionService,TargetingIdeaService,TrafficEstimatorService,ExpressBusinessService,ProductServiceService,BudgetSuggestionService,PromotionService,CampaignSharedSetService,SharedCriterionService,SharedSetService,CampaignExtensionSettingService,AdGroupExtensionSettingService,CustomerExtensionSettingService,AdCustomizerFeedService,AccountLabelService',
        'api.versions.v201601.services.AdGroupAdService.wsdl' => '${api.server}/api/adwords/cm/v201601/AdGroupAdService?wsdl',
        'api.versions.v201601.services.AdGroupBidModifierService.wsdl' => '${api.server}/api/adwords/cm/v201601/AdGroupBidModifierService?wsdl',
        'api.versions.v201601.services.AdGroupCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201601/AdGroupCriterionService?wsdl',
        'api.versions.v201601.services.AdGroupFeedService.wsdl' => '${api.server}/api/adwords/cm/v201601/AdGroupFeedService?wsdl',
        'api.versions.v201601.services.AdGroupService.wsdl' => '${api.server}/api/adwords/cm/v201601/AdGroupService?wsdl',
        'api.versions.v201601.services.AdParamService.wsdl' => '${api.server}/api/adwords/cm/v201601/AdParamService?wsdl',
        'api.versions.v201601.services.AdwordsUserListService.wsdl' => '${api.server}/api/adwords/rm/v201601/AdwordsUserListService?wsdl',
        'api.versions.v201601.services.BatchJobService.wsdl' => '${api.server}/api/adwords/cm/v201601/BatchJobService?wsdl',
        'api.versions.v201601.services.BiddingStrategyService.wsdl' => '${api.server}/api/adwords/cm/v201601/BiddingStrategyService?wsdl',
        'api.versions.v201601.services.BudgetOrderService.wsdl' => '${api.server}/api/adwords/billing/v201601/BudgetOrderService?wsdl',
        'api.versions.v201601.services.BudgetService.wsdl' => '${api.server}/api/adwords/cm/v201601/BudgetService?wsdl',
        'api.versions.v201601.services.BudgetSuggestionService.wsdl' => '${api.server}/api/adwords/express/v201601/BudgetSuggestionService?wsdl',
        'api.versions.v201601.services.CampaignCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201601/CampaignCriterionService?wsdl',
        'api.versions.v201601.services.CampaignFeedService.wsdl' => '${api.server}/api/adwords/cm/v201601/CampaignFeedService?wsdl',
        'api.versions.v201601.services.CampaignService.wsdl' => '${api.server}/api/adwords/cm/v201601/CampaignService?wsdl',
        'api.versions.v201601.services.CampaignSharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201601/CampaignSharedSetService?wsdl',
        'api.versions.v201601.services.ConstantDataService.wsdl' => '${api.server}/api/adwords/cm/v201601/ConstantDataService?wsdl',
        'api.versions.v201601.services.ConversionTrackerService.wsdl' => '${api.server}/api/adwords/cm/v201601/ConversionTrackerService?wsdl',
        'api.versions.v201601.services.CustomerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201601/CustomerFeedService?wsdl',
        'api.versions.v201601.services.CustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201601/CustomerService?wsdl',
        'api.versions.v201601.services.CustomerSyncService.wsdl' => '${api.server}/api/adwords/ch/v201601/CustomerSyncService?wsdl',
        'api.versions.v201601.services.DataService.wsdl' => '${api.server}/api/adwords/cm/v201601/DataService?wsdl',
        'api.versions.v201601.services.ExperimentService.wsdl' => '${api.server}/api/adwords/cm/v201601/ExperimentService?wsdl',
        'api.versions.v201601.services.ExpressBusinessService.wsdl' => '${api.server}/api/adwords/express/v201601/ExpressBusinessService?wsdl',
        'api.versions.v201601.services.FeedItemService.wsdl' => '${api.server}/api/adwords/cm/v201601/FeedItemService?wsdl',
        'api.versions.v201601.services.FeedMappingService.wsdl' => '${api.server}/api/adwords/cm/v201601/FeedMappingService?wsdl',
        'api.versions.v201601.services.FeedService.wsdl' => '${api.server}/api/adwords/cm/v201601/FeedService?wsdl',
        'api.versions.v201601.services.LabelService.wsdl' => '${api.server}/api/adwords/cm/v201601/LabelService?wsdl',
        'api.versions.v201601.services.LocationCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201601/LocationCriterionService?wsdl',
        'api.versions.v201601.services.ManagedCustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201601/ManagedCustomerService?wsdl',
        'api.versions.v201601.services.MediaService.wsdl' => '${api.server}/api/adwords/cm/v201601/MediaService?wsdl',
        'api.versions.v201601.services.MutateJobService.wsdl' => '${api.server}/api/adwords/cm/v201601/MutateJobService?wsdl',
        'api.versions.v201601.services.OfflineConversionFeedService.wsdl' => '${api.server}/api/adwords/cm/v201601/OfflineConversionFeedService?wsdl',
        'api.versions.v201601.services.ProductServiceService.wsdl' => '${api.server}/api/adwords/express/v201601/ProductServiceService?wsdl',
        'api.versions.v201601.services.PromotionService.wsdl' => '${api.server}/api/adwords/express/v201601/PromotionService?wsdl',
        'api.versions.v201601.services.ReportDefinitionService.wsdl' => '${api.server}/api/adwords/cm/v201601/ReportDefinitionService?wsdl',
        'api.versions.v201601.services.SharedCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201601/SharedCriterionService?wsdl',
        'api.versions.v201601.services.SharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201601/SharedSetService?wsdl',
        'api.versions.v201601.services.TargetingIdeaService.wsdl' => '${api.server}/api/adwords/o/v201601/TargetingIdeaService?wsdl',
        'api.versions.v201601.services.TrafficEstimatorService.wsdl' => '${api.server}/api/adwords/o/v201601/TrafficEstimatorService?wsdl',
        'api.versions.v201601.services.CampaignExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201601/CampaignExtensionSettingService?wsdl',
        'api.versions.v201601.services.AdGroupExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201601/AdGroupExtensionSettingService?wsdl',
        'api.versions.v201601.services.CustomerExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201601/CustomerExtensionSettingService?wsdl',
        'api.versions.v201601.services.AdCustomizerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201601/AdCustomizerFeedService?wsdl',
        'api.versions.v201601.services.AccountLabelService.wsdl' => '${api.server}/api/adwords/mcm/v201601/AccountLabelService?wsdl',

        /*
         * v201603
         */
        'api.versions.v201603.namespace=Google_Api_Ads_AdWords_v201603',
        'api.versions.v201603.services=AdGroupAdService,AdGroupBidModifierService,AdGroupCriterionService,AdGroupFeedService,AdGroupService,AdParamService,AdwordsUserListService,BatchJobService,BiddingStrategyService,BudgetOrderService,BudgetService,CampaignCriterionService,CampaignFeedService,CampaignService,ConstantDataService,ConversionTrackerService,CustomerFeedService,CustomerService,CustomerSyncService,DataService,ExperimentService,FeedItemService,FeedMappingService,FeedService,LabelService,LocationCriterionService,ManagedCustomerService,MediaService,OfflineConversionFeedService,ReportDefinitionService,TargetingIdeaService,TrafficEstimatorService,ExpressBusinessService,ProductServiceService,BudgetSuggestionService,PromotionService,CampaignSharedSetService,SharedCriterionService,SharedSetService,CampaignExtensionSettingService,AdGroupExtensionSettingService,CustomerExtensionSettingService,AdCustomizerFeedService,AccountLabelService,DraftService,DraftAsyncErrorService,TrialService,TrialAsyncErrorService',
        'api.versions.v201603.services.AdGroupAdService.wsdl' => '${api.server}/api/adwords/cm/v201603/AdGroupAdService?wsdl',
        'api.versions.v201603.services.AdGroupBidModifierService.wsdl' => '${api.server}/api/adwords/cm/v201603/AdGroupBidModifierService?wsdl',
        'api.versions.v201603.services.AdGroupCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201603/AdGroupCriterionService?wsdl',
        'api.versions.v201603.services.AdGroupFeedService.wsdl' => '${api.server}/api/adwords/cm/v201603/AdGroupFeedService?wsdl',
        'api.versions.v201603.services.AdGroupService.wsdl' => '${api.server}/api/adwords/cm/v201603/AdGroupService?wsdl',
        'api.versions.v201603.services.AdParamService.wsdl' => '${api.server}/api/adwords/cm/v201603/AdParamService?wsdl',
        'api.versions.v201603.services.AdwordsUserListService.wsdl' => '${api.server}/api/adwords/rm/v201603/AdwordsUserListService?wsdl',
        'api.versions.v201603.services.BatchJobService.wsdl' => '${api.server}/api/adwords/cm/v201603/BatchJobService?wsdl',
        'api.versions.v201603.services.BiddingStrategyService.wsdl' => '${api.server}/api/adwords/cm/v201603/BiddingStrategyService?wsdl',
        'api.versions.v201603.services.BudgetOrderService.wsdl' => '${api.server}/api/adwords/billing/v201603/BudgetOrderService?wsdl',
        'api.versions.v201603.services.BudgetService.wsdl' => '${api.server}/api/adwords/cm/v201603/BudgetService?wsdl',
        'api.versions.v201603.services.BudgetSuggestionService.wsdl' => '${api.server}/api/adwords/express/v201603/BudgetSuggestionService?wsdl',
        'api.versions.v201603.services.CampaignCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201603/CampaignCriterionService?wsdl',
        'api.versions.v201603.services.CampaignFeedService.wsdl' => '${api.server}/api/adwords/cm/v201603/CampaignFeedService?wsdl',
        'api.versions.v201603.services.CampaignService.wsdl' => '${api.server}/api/adwords/cm/v201603/CampaignService?wsdl',
        'api.versions.v201603.services.CampaignSharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201603/CampaignSharedSetService?wsdl',
        'api.versions.v201603.services.ConstantDataService.wsdl' => '${api.server}/api/adwords/cm/v201603/ConstantDataService?wsdl',
        'api.versions.v201603.services.ConversionTrackerService.wsdl' => '${api.server}/api/adwords/cm/v201603/ConversionTrackerService?wsdl',
        'api.versions.v201603.services.CustomerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201603/CustomerFeedService?wsdl',
        'api.versions.v201603.services.CustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201603/CustomerService?wsdl',
        'api.versions.v201603.services.CustomerSyncService.wsdl' => '${api.server}/api/adwords/ch/v201603/CustomerSyncService?wsdl',
        'api.versions.v201603.services.DataService.wsdl' => '${api.server}/api/adwords/cm/v201603/DataService?wsdl',
        'api.versions.v201603.services.ExperimentService.wsdl' => '${api.server}/api/adwords/cm/v201603/ExperimentService?wsdl',
        'api.versions.v201603.services.ExpressBusinessService.wsdl' => '${api.server}/api/adwords/express/v201603/ExpressBusinessService?wsdl',
        'api.versions.v201603.services.FeedItemService.wsdl' => '${api.server}/api/adwords/cm/v201603/FeedItemService?wsdl',
        'api.versions.v201603.services.FeedMappingService.wsdl' => '${api.server}/api/adwords/cm/v201603/FeedMappingService?wsdl',
        'api.versions.v201603.services.FeedService.wsdl' => '${api.server}/api/adwords/cm/v201603/FeedService?wsdl',
        'api.versions.v201603.services.LabelService.wsdl' => '${api.server}/api/adwords/cm/v201603/LabelService?wsdl',
        'api.versions.v201603.services.LocationCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201603/LocationCriterionService?wsdl',
        'api.versions.v201603.services.ManagedCustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201603/ManagedCustomerService?wsdl',
        'api.versions.v201603.services.MediaService.wsdl' => '${api.server}/api/adwords/cm/v201603/MediaService?wsdl',
        'api.versions.v201603.services.OfflineConversionFeedService.wsdl' => '${api.server}/api/adwords/cm/v201603/OfflineConversionFeedService?wsdl',
        'api.versions.v201603.services.ProductServiceService.wsdl' => '${api.server}/api/adwords/express/v201603/ProductServiceService?wsdl',
        'api.versions.v201603.services.PromotionService.wsdl' => '${api.server}/api/adwords/express/v201603/PromotionService?wsdl',
        'api.versions.v201603.services.ReportDefinitionService.wsdl' => '${api.server}/api/adwords/cm/v201603/ReportDefinitionService?wsdl',
        'api.versions.v201603.services.SharedCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201603/SharedCriterionService?wsdl',
        'api.versions.v201603.services.SharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201603/SharedSetService?wsdl',
        'api.versions.v201603.services.TargetingIdeaService.wsdl' => '${api.server}/api/adwords/o/v201603/TargetingIdeaService?wsdl',
        'api.versions.v201603.services.TrafficEstimatorService.wsdl' => '${api.server}/api/adwords/o/v201603/TrafficEstimatorService?wsdl',
        'api.versions.v201603.services.CampaignExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201603/CampaignExtensionSettingService?wsdl',
        'api.versions.v201603.services.AdGroupExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201603/AdGroupExtensionSettingService?wsdl',
        'api.versions.v201603.services.CustomerExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201603/CustomerExtensionSettingService?wsdl',
        'api.versions.v201603.services.AdCustomizerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201603/AdCustomizerFeedService?wsdl',
        'api.versions.v201603.services.AccountLabelService.wsdl' => '${api.server}/api/adwords/mcm/v201603/AccountLabelService?wsdl',
        'api.versions.v201603.services.DraftService.wsdl' => '${api.server}/api/adwords/cm/v201603/DraftService?wsdl',
        'api.versions.v201603.services.DraftAsyncErrorService.wsdl' => '${api.server}/api/adwords/cm/v201603/DraftAsyncErrorService?wsdl',
        'api.versions.v201603.services.TrialService.wsdl' => '${api.server}/api/adwords/cm/v201603/TrialService?wsdl',
        'api.versions.v201603.services.TrialAsyncErrorService.wsdl' => '${api.server}/api/adwords/cm/v201603/TrialAsyncErrorService?wsdl',
    ];
}
