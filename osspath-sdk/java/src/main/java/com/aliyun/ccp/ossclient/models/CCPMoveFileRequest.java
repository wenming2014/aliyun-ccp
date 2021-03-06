// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ccp.ossclient.models;

import com.aliyun.tea.*;

/**
 * 文件移动请求
 */
public class CCPMoveFileRequest extends TeaModel {
    @NameInMap("drive_id")
    @Validation(pattern = "[0-9]+")
    public String driveId;

    @NameInMap("new_name")
    public String newName;

    @NameInMap("overwrite")
    public Boolean overwrite;

    @NameInMap("file_id")
    @Validation(pattern = "[a-z0-9.-_]{1,50}")
    public String fileId;

    @NameInMap("to_parent_file_id")
    public String toParentFileId;

    public static CCPMoveFileRequest build(java.util.Map<String, ?> map) throws Exception {
        CCPMoveFileRequest self = new CCPMoveFileRequest();
        return TeaModel.build(map, self);
    }

}
