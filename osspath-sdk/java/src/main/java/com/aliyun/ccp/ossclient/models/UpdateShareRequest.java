// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ccp.ossclient.models;

import com.aliyun.tea.*;

/**
 * update share request
 */
public class UpdateShareRequest extends TeaModel {
    @NameInMap("description")
    public String description;

    @NameInMap("expiration")
    public String expiration;

    @NameInMap("permissions")
    public java.util.List<String> permissions;

    @NameInMap("share_id")
    @Validation(required = true)
    public String shareId;

    @NameInMap("share_name")
    public String shareName;

    @NameInMap("share_policy")
    public java.util.List<SharePermissionPolicy> sharePolicy;

    @NameInMap("status")
    public String status;

    public static UpdateShareRequest build(java.util.Map<String, ?> map) throws Exception {
        UpdateShareRequest self = new UpdateShareRequest();
        return TeaModel.build(map, self);
    }

}
