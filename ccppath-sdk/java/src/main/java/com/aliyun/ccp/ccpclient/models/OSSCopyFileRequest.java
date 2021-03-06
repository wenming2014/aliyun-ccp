// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ccp.ccpclient.models;

import com.aliyun.tea.*;

/**
 * copy file request
 */
public class OSSCopyFileRequest extends TeaModel {
    @NameInMap("drive_id")
    @Validation(pattern = "[0-9]+")
    public String driveId;

    @NameInMap("file_path")
    public String filePath;

    @NameInMap("new_name")
    @Validation(pattern = "[a-zA-Z0-9.-]{1,1000}")
    public String newName;

    @NameInMap("overwrite")
    public Boolean overwrite;

    @NameInMap("share_id")
    @Validation(pattern = "[0-9a-zA-z-]+")
    public String shareId;

    @NameInMap("to_drive_id")
    @Validation(required = true, pattern = "[0-9]+")
    public String toDriveId;

    @NameInMap("to_parent_file_path")
    @Validation(required = true)
    public String toParentFilePath;

    @NameInMap("to_share_id")
    public String toShareId;

    public static OSSCopyFileRequest build(java.util.Map<String, ?> map) throws Exception {
        OSSCopyFileRequest self = new OSSCopyFileRequest();
        return TeaModel.build(map, self);
    }

}
