<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/autoscaling_policies.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1Beta2;

class AutoscalingPolicies
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaa1e0a38676f6f676c652f636c6f75642f6461746170726f632f763162657461322f6175746f7363616c696e675f706f6c69636965732e70726f746f121d676f6f676c652e636c6f75642e6461746170726f632e763162657461321a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f22b9040a114175746f7363616c696e67506f6c696379120f0a0269641801200128094203e0410212110a046e616d651802200128094203e0410312530a0f62617369635f616c676f726974686d18032001280b32382e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e42617369634175746f7363616c696e67416c676f726974686d4800125f0a0d776f726b65725f636f6e66696718042001280b32432e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e496e7374616e636547726f75704175746f7363616c696e67506f6c696379436f6e6669674203e0410212690a177365636f6e646172795f776f726b65725f636f6e66696718052001280b32432e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e496e7374616e636547726f75704175746f7363616c696e67506f6c696379436f6e6669674203e041013ad101ea41cd010a296461746170726f632e676f6f676c65617069732e636f6d2f4175746f7363616c696e67506f6c696379125070726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f6175746f7363616c696e67506f6c69636965732f7b6175746f7363616c696e675f706f6c6963797d124c70726f6a656374732f7b70726f6a6563747d2f726567696f6e732f7b726567696f6e7d2f6175746f7363616c696e67506f6c69636965732f7b6175746f7363616c696e675f706f6c6963797d2001420b0a09616c676f726974686d22a9010a1942617369634175746f7363616c696e67416c676f726974686d12530a0b7961726e5f636f6e66696718012001280b32392e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e42617369635961726e4175746f7363616c696e67436f6e6669674203e0410212370a0f636f6f6c646f776e5f706572696f6418022001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e4203e0410122f9010a1a42617369635961726e4175746f7363616c696e67436f6e66696712450a1d677261636566756c5f6465636f6d6d697373696f6e5f74696d656f757418052001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e4203e04102121c0a0f7363616c655f75705f666163746f721801200128014203e04102121e0a117363616c655f646f776e5f666163746f721802200128014203e0410212290a1c7363616c655f75705f6d696e5f776f726b65725f6672616374696f6e1803200128014203e04101122b0a1e7363616c655f646f776e5f6d696e5f776f726b65725f6672616374696f6e1804200128014203e0410122730a24496e7374616e636547726f75704175746f7363616c696e67506f6c696379436f6e666967121a0a0d6d696e5f696e7374616e6365731801200128054203e04101121a0a0d6d61785f696e7374616e6365731802200128054203e0410112130a067765696768741803200128054203e0410122aa010a1e4372656174654175746f7363616c696e67506f6c6963795265717565737412410a06706172656e741801200128094231e04102fa412b12296461746170726f632e676f6f676c65617069732e636f6d2f4175746f7363616c696e67506f6c69637912450a06706f6c69637918022001280b32302e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e4175746f7363616c696e67506f6c6963794203e04102225e0a1b4765744175746f7363616c696e67506f6c69637952657175657374123f0a046e616d651801200128094231e04102fa412b0a296461746170726f632e676f6f676c65617069732e636f6d2f4175746f7363616c696e67506f6c69637922670a1e5570646174654175746f7363616c696e67506f6c6963795265717565737412450a06706f6c69637918012001280b32302e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e4175746f7363616c696e67506f6c6963794203e0410222610a1e44656c6574654175746f7363616c696e67506f6c69637952657175657374123f0a046e616d651801200128094231e04102fa412b0a296461746170726f632e676f6f676c65617069732e636f6d2f4175746f7363616c696e67506f6c6963792294010a1e4c6973744175746f7363616c696e67506f6c69636965735265717565737412410a06706172656e741801200128094231e04102fa412b12296461746170726f632e676f6f676c65617069732e636f6d2f4175746f7363616c696e67506f6c69637912160a09706167655f73697a651802200128054203e0410112170a0a706167655f746f6b656e1803200128094203e041012288010a1f4c6973744175746f7363616c696e67506f6c6963696573526573706f6e736512470a08706f6c696369657318012003280b32302e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e4175746f7363616c696e67506f6c6963794203e04103121c0a0f6e6578745f706167655f746f6b656e1802200128094203e04103328f0c0a184175746f7363616c696e67506f6c6963795365727669636512b0020a174372656174654175746f7363616c696e67506f6c696379123d2e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e4372656174654175746f7363616c696e67506f6c696379526571756573741a302e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e4175746f7363616c696e67506f6c69637922a30182d3e493028c01223c2f763162657461322f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f6175746f7363616c696e67506f6c69636965733a06706f6c6963795a44223a2f763162657461322f7b706172656e743d70726f6a656374732f2a2f726567696f6e732f2a7d2f6175746f7363616c696e67506f6c69636965733a06706f6c696379da410d706172656e742c706f6c69637912b7020a175570646174654175746f7363616c696e67506f6c696379123d2e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e5570646174654175746f7363616c696e67506f6c696379526571756573741a302e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e4175746f7363616c696e67506f6c69637922aa0182d3e493029a011a432f763162657461322f7b706f6c6963792e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6175746f7363616c696e67506f6c69636965732f2a7d3a06706f6c6963795a4b1a412f763162657461322f7b706f6c6963792e6e616d653d70726f6a656374732f2a2f726567696f6e732f2a2f6175746f7363616c696e67506f6c69636965732f2a7d3a06706f6c696379da4106706f6c6963791290020a144765744175746f7363616c696e67506f6c696379123a2e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e4765744175746f7363616c696e67506f6c696379526571756573741a302e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e4175746f7363616c696e67506f6c69637922890182d3e493027c123c2f763162657461322f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6175746f7363616c696e67506f6c69636965732f2a7d5a3c123a2f763162657461322f7b6e616d653d70726f6a656374732f2a2f726567696f6e732f2a2f6175746f7363616c696e67506f6c69636965732f2a7dda41046e616d6512a6020a174c6973744175746f7363616c696e67506f6c6963696573123d2e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e4c6973744175746f7363616c696e67506f6c6963696573526571756573741a3e2e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e4c6973744175746f7363616c696e67506f6c6963696573526573706f6e7365228b0182d3e493027c123c2f763162657461322f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f6175746f7363616c696e67506f6c69636965735a3c123a2f763162657461322f7b706172656e743d70726f6a656374732f2a2f726567696f6e732f2a7d2f6175746f7363616c696e67506f6c6963696573da4106706172656e7412fc010a1744656c6574654175746f7363616c696e67506f6c696379123d2e676f6f676c652e636c6f75642e6461746170726f632e763162657461322e44656c6574654175746f7363616c696e67506f6c696379526571756573741a162e676f6f676c652e70726f746f6275662e456d70747922890182d3e493027c2a3c2f763162657461322f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6175746f7363616c696e67506f6c69636965732f2a7d5a3c2a3a2f763162657461322f7b6e616d653d70726f6a656374732f2a2f726567696f6e732f2a2f6175746f7363616c696e67506f6c69636965732f2a7dda41046e616d651a4bca41176461746170726f632e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d42ce010a21636f6d2e676f6f676c652e636c6f75642e6461746170726f632e7631626574613242184175746f7363616c696e67506f6c696369657350726f746f50015a45676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6461746170726f632f763162657461323b6461746170726f63ea41450a1e6461746170726f632e676f6f676c65617069732e636f6d2f526567696f6e122370726f6a656374732f7b70726f6a6563747d2f726567696f6e732f7b726567696f6e7d620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

