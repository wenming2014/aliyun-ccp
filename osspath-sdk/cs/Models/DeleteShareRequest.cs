// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace Aliyun.SDK.CCP.OSSClient.Models
{
    /**
     * delete share request
     */
    public class DeleteShareRequest : TeaModel {
        [NameInMap("share_id")]
        [Validation(Required=true)]
        public string ShareId { get; set; }

    }

}
