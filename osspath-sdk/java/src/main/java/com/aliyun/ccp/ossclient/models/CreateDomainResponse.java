// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ccp.ossclient.models;

import com.aliyun.tea.*;

public class CreateDomainResponse extends TeaModel {
    @NameInMap("requestId")
    public String requestId;

    @NameInMap("auth_alipay_app_id")
    public String authAlipayAppId;

    @NameInMap("auth_alipay_enable")
    public boolean authAlipayEnable;

    @NameInMap("auth_alipay_private_key")
    public String authAlipayPrivateKey;

    @NameInMap("auth_config")
    public java.util.Map<String, Object> authConfig;

    @NameInMap("auth_dingding_app_id")
    public String authDingdingAppId;

    @NameInMap("auth_dingding_app_secret")
    public String authDingdingAppSecret;

    @NameInMap("auth_dingding_enable")
    public boolean authDingdingEnable;

    @NameInMap("auth_endpoint_enable")
    public boolean authEndpointEnable;

    @NameInMap("auth_ram_app_id")
    public String authRamAppId;

    @NameInMap("auth_ram_app_secret")
    public String authRamAppSecret;

    @NameInMap("auth_ram_enable")
    public boolean authRamEnable;

    @NameInMap("created_at")
    public String createdAt;

    @NameInMap("data_hash_name")
    public String dataHashName;

    @NameInMap("description")
    public String description;

    @NameInMap("domain_id")
    public String domainId;

    @NameInMap("domain_name")
    public String domainName;

    @NameInMap("event_filename_matches")
    public String eventFilenameMatches;

    @NameInMap("event_mns_endpoint")
    public String eventMnsEndpoint;

    @NameInMap("event_mns_topic")
    public String eventMnsTopic;

    @NameInMap("event_names")
    public String[] eventNames;

    @NameInMap("event_role_arn")
    public String eventRoleArn;

    @NameInMap("init_drive_enable")
    public boolean initDriveEnable;

    @NameInMap("init_drive_size")
    public Long initDriveSize;

    @NameInMap("init_drive_store_id")
    public String initDriveStoreId;

    @NameInMap("path_type")
    public String pathType;

    @NameInMap("published_app_access_strategy")
    public AppAccessStrategy[] publishedAppAccessStrategy;

    @NameInMap("sharable")
    public boolean sharable;

    @NameInMap("store_level")
    public String storeLevel;

    @NameInMap("store_region_list")
    public String[] storeRegionList;

    @NameInMap("updated_at")
    public String updatedAt;

}
