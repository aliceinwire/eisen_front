CREATE TABLE `���[�U�[���` (
  `���j�[�NID` INT AUTO_INCREMENT,
  `���[�U�[ID` VARCHAR(20),
  `�p�X���[�h` VARCHAR(20),
  `���[���A�h���X` VARCHAR(60),
  `���[�U�[��` VARCHAR(60),
  `�}�V��ID` VARCHAR(60),
  PRIMARY KEY (`���j�[�NID`)
);
CREATE TABLE `�}�V�����` (
  `�}�V��ID` INT AUTO_INCREMENT,
  `�}�V����` VARCHAR(20),
  `IP�A�h���X` VARCHAR(20),
  `�|�[�g�ԍ�` VARCHAR(20),
  `OS���` VARCHAR(20),
  `�p�b�P�[�W�Ǘ��V�X�e��ID` VARCHAR(20),
  `�}�V���X�e�[�^�XID` VARCHAR(20),
  PRIMARY KEY (`�}�V��ID`)
);
CREATE TABLE `�p�b�P�[�W�Ǘ��V�X�e�����` (
  `�p�b�P�[�W�Ǘ��V�X�e��ID` INT AUTO_INCREMENT,
  `�p�b�P�[�W�Ǘ��V�X�e����` VARCHAR(20),
  PRIMARY KEY (`�p�b�P�[�W�Ǘ��V�X�e��ID`)
);
CREATE TABLE `�C���X�g�[���ς݃p�b�P�[�W` (
  `�}�V��ID` INT AUTO_INCREMENT,
  `�p�b�P�[�W�Ǘ��V�X�e��ID` VARCHAR(20),
  `�p�b�P�[�WID` VARCHAR(20),
  `���݂̃p�b�P�[�W�o�[�W����` VARCHAR(60),
  PRIMARY KEY (`�p�b�P�[�WID`)
);
CREATE TABLE `�p�b�P�[�W���` (
  `�p�b�P�[�WID` INT AUTO_INCREMENT,
  `�p�b�P�[�W��` VARCHAR(20),
  `�p�b�P�[�W�̐���` VARCHAR(60),
  PRIMARY KEY (`�p�b�P�[�WID`)
);
CREATE TABLE `�ŐV�p�b�P�[�W���` (
  `�������` INT AUTO_INCREMENT,
  `�p�b�P�[�WID` VARCHAR(20),
  `�p�b�P�[�W�Ǘ��V�X�e��ID` VARCHAR(20),
  `�o�[�W�������` VARCHAR(60),
  `�X�V���` VARCHAR(60),
  PRIMARY KEY (`�p�b�P�[�W�Ǘ��V�X�e��ID`)
);
CREATE TABLE `�}�V���X�e�[�^�X���` (
  `�������` INT AUTO_INCREMENT,
  `�}�V��ID` VARCHAR(20),
  `�X�e�[�^�XID` VARCHAR(20),
  PRIMARY KEY (`�X�e�[�^�XID`)
);
CREATE TABLE `�X�e�[�^�X` (
  `�X�e�[�^�XID` INT AUTO_INCREMENT,
  `�X�e�[�^�X�\��` VARCHAR(20),
  PRIMARY KEY (`�X�e�[�^�XID`)
);
