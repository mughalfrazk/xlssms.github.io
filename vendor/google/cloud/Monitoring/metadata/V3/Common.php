<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/common.proto

namespace GPBMetadata\Google\Monitoring\V3;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Distribution::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a970e0a21676f6f676c652f6d6f6e69746f72696e672f76332f636f6d6d" .
            "6f6e2e70726f746f1214676f6f676c652e6d6f6e69746f72696e672e7633" .
            "1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f" .
            "746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e" .
            "70726f746f22aa010a0a547970656456616c756512140a0a626f6f6c5f76" .
            "616c7565180120012808480012150a0b696e7436345f76616c7565180220" .
            "012803480012160a0c646f75626c655f76616c7565180320012801480012" .
            "160a0c737472696e675f76616c7565180420012809480012360a12646973" .
            "747269627574696f6e5f76616c756518052001280b32182e676f6f676c65" .
            "2e6170692e446973747269627574696f6e480042070a0576616c7565226c" .
            "0a0c54696d65496e74657276616c122c0a08656e645f74696d6518022001" .
            "280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70" .
            "122e0a0a73746172745f74696d6518012001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d7022ad070a0b41676772656761" .
            "74696f6e12330a10616c69676e6d656e745f706572696f6418012001280b" .
            "32192e676f6f676c652e70726f746f6275662e4475726174696f6e12450a" .
            "127065725f7365726965735f616c69676e657218022001280e32292e676f" .
            "6f676c652e6d6f6e69746f72696e672e76332e4167677265676174696f6e" .
            "2e416c69676e657212470a1463726f73735f7365726965735f7265647563" .
            "657218042001280e32292e676f6f676c652e6d6f6e69746f72696e672e76" .
            "332e4167677265676174696f6e2e5265647563657212170a0f67726f7570" .
            "5f62795f6669656c6473180520032809228b030a07416c69676e6572120e" .
            "0a0a414c49474e5f4e4f4e451000120f0a0b414c49474e5f44454c544110" .
            "01120e0a0a414c49474e5f52415445100212150a11414c49474e5f494e54" .
            "4552504f4c415445100312140a10414c49474e5f4e4558545f4f4c444552" .
            "1004120d0a09414c49474e5f4d494e100a120d0a09414c49474e5f4d4158" .
            "100b120e0a0a414c49474e5f4d45414e100c120f0a0b414c49474e5f434f" .
            "554e54100d120d0a09414c49474e5f53554d100e12100a0c414c49474e5f" .
            "535444444556100f12140a10414c49474e5f434f554e545f545255451010" .
            "12150a11414c49474e5f434f554e545f46414c5345101812170a13414c49" .
            "474e5f4652414354494f4e5f54525545101112170a13414c49474e5f5045" .
            "5243454e54494c455f3939101212170a13414c49474e5f50455243454e54" .
            "494c455f3935101312170a13414c49474e5f50455243454e54494c455f35" .
            "30101412170a13414c49474e5f50455243454e54494c455f303510151218" .
            "0a14414c49474e5f50455243454e545f4348414e4745101722b1020a0752" .
            "656475636572120f0a0b5245445543455f4e4f4e451000120f0a0b524544" .
            "5543455f4d45414e1001120e0a0a5245445543455f4d494e1002120e0a0a" .
            "5245445543455f4d41581003120e0a0a5245445543455f53554d10041211" .
            "0a0d5245445543455f535444444556100512100a0c5245445543455f434f" .
            "554e54100612150a115245445543455f434f554e545f5452554510071216" .
            "0a125245445543455f434f554e545f46414c5345100f12180a1452454455" .
            "43455f4652414354494f4e5f54525545100812180a145245445543455f50" .
            "455243454e54494c455f3939100912180a145245445543455f5045524345" .
            "4e54494c455f3935100a12180a145245445543455f50455243454e54494c" .
            "455f3530100b12180a145245445543455f50455243454e54494c455f3035" .
            "100c2a9e010a0e436f6d70617269736f6e54797065121a0a16434f4d5041" .
            "5249534f4e5f554e535045434946494544100012110a0d434f4d50415249" .
            "534f4e5f4754100112110a0d434f4d50415249534f4e5f4745100212110a" .
            "0d434f4d50415249534f4e5f4c54100312110a0d434f4d50415249534f4e" .
            "5f4c45100412110a0d434f4d50415249534f4e5f4551100512110a0d434f" .
            "4d50415249534f4e5f4e4510062a610a0b5365727669636554696572121c" .
            "0a18534552564943455f544945525f554e53504543494649454410001216" .
            "0a12534552564943455f544945525f4241534943100112180a1453455256" .
            "4943455f544945525f5052454d49554d10021a02180142c3010a18636f6d" .
            "2e676f6f676c652e6d6f6e69746f72696e672e7633420b436f6d6d6f6e50" .
            "726f746f50015a3e676f6f676c652e676f6c616e672e6f72672f67656e70" .
            "726f746f2f676f6f676c65617069732f6d6f6e69746f72696e672f76333b" .
            "6d6f6e69746f72696e67aa021a476f6f676c652e436c6f75642e4d6f6e69" .
            "746f72696e672e5633ca021a476f6f676c655c436c6f75645c4d6f6e6974" .
            "6f72696e675c5633ea021d476f6f676c653a3a436c6f75643a3a4d6f6e69" .
            "746f72696e673a3a5633620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

