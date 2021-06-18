#pragma once

#include "Modules/ModuleManager.h"

DECLARE_LOG_CATEGORY_CLASS(JSONQueryLog, Log, All);

class JSONQueryModule : public IModuleInterface
{
private:

public:
	JSONQueryModule();

	virtual void StartupModule() override;
	virtual void ShutdownModule() override;
};
